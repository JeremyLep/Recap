<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ressource;
use AppBundle\Form\RessourceType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class RessourceController extends Controller
{
    public function addAction(Request $request, $groupeId, $ficheId)
    {
      $em        = $this->getDoctrine()->getManager();

      $fiche = $em
        ->getRepository('AppBundle:Fiche')
        ->findOneBy(array(
          'id'     => $ficheId,
          'groupe' => $groupeId,
        ));

      $membre = $em
        ->getRepository('AppBundle:Membre')
        ->findOneBy(array(
            'user'   => $this->getUser(),
            'groupe' => $groupeId,
        ));
      
      if ($membre === null || !$membre->hasRole('ROLE_ADMIN') || ($membre->hasRole('ROLE_MODO') && !($fiche->getAuteur()->getId() == $membre->getUser()->getId()) )) {
        throw new AccessDeniedException();
      }

      $ressource = new Ressource();
      $form      = $this->createForm(RessourceType::class, $ressource);

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        $file = $ressource->getRouteDoc();
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        $route = $this->getParameter('ressource_dir')."groupe".$fiche->getGroupe()->getId()."/fiche".$fiche->getId()."/";
        if (!is_dir($route)) {
          mkdir($route, 0777, true);
        }
        $file->move($route, $fileName);
        $ressource->setRouteDoc($fileName);
        $ressource->setFiche($fiche);

        $fiche->addRessource($ressource);
        
        $em->persist($fiche);
        $em->persist($ressource);
        $em->flush();

        return $this->redirectToRoute('app_fiche', array(
          'id_fiche'  => $fiche->getId(), 
          'id_groupe' => $groupeId,
        ));
      }

      return $this->render('AppBundle:Fiche:addRessource.html.twig', array(
          'fiche'     => $fiche,
          'form'      => $form->createView(),
          'groupe'    => $fiche->getGroupe(),
      ));
    }

    public function viewAction($groupeId, $ficheId, $fileName)
    {
        $em    = $this->getDoctrine()->getManager();
        
        $membre = $em
            ->getRepository('AppBundle:Membre')
            ->findOneBy(array(
                'user'   => $this->getUser(),
                'groupe' => $groupeId,
            ));
        
        if ($membre === null || !$membre->hasRole('ROLE_USER')) {
          throw new AccessDeniedException();
        }

        $fiche = $em
        ->getRepository('AppBundle:Fiche')
        ->findOneBy(array(
          'id'        => $ficheId, 
          'groupe'    => $groupeId,
        ));

        $file = $this->getParameter('ressource_dir')."groupe".$fiche->getGroupe()->getId()."/fiche".$fiche->getId()."/".$fileName;

        if (!file_exists($file)) {
            return new NotFoundHttpException;
        }

        return new BinaryFileResponse($file);
    }

    public function downloadAction($groupeId, $ficheId, $fileName)
    {
        $em    = $this->getDoctrine()->getManager();
        $fiche = $em
        ->getRepository('AppBundle:Fiche')
        ->findOneBy(array(
          'id'        => $ficheId, 
          'groupe'    => $groupeId,
        ));

        $membre = $em
            ->getRepository('AppBundle:Membre')
            ->findOneBy(array(
                'user'   => $this->getUser(),
                'groupe' => $groupeId,
            ));
        
        if ($membre === null || !$membre->hasRole('ROLE_USER')) {
          throw new AccessDeniedException();
        }

        $file = $this->getParameter('ressource_dir')."groupe".$fiche->getGroupe()->getId()."/fiche".$fiche->getId()."/".$fileName;
        $response = new BinaryFileResponse($file);
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

        if (!file_exists($file)) {
            return new NotFoundHttpException;
        }

        return $response;
    }

    public function deleteAction(Request $request, $groupeId, $ficheId)
    {
      $em = $this->getDoctrine()->getManager();
      
      $fileName = $request->request->get('route');

      $fiche = $em
      ->getRepository('AppBundle:Fiche')
      ->findOneBy(array(
        'id'     => $ficheId, 
        'groupe' => $groupeId,
      ));

      $membre = $em
        ->getRepository('AppBundle:Membre')
        ->findOneBy(array(
            'user'   => $this->getUser(),
            'groupe' => $groupeId,
        ));
      
      if ($membre === null || !$membre->hasRole('ROLE_ADMIN') || ($membre->hasRole('ROLE_MODO') && !($fiche->getAuteur()->getId() == $membre->getUser()->getId()) )) {
        throw new AccessDeniedException();
      }

      $ressource = $em
      ->getRepository('AppBundle:Ressource')
      ->findOneBy(array(
        'fiche' => $ficheId,
        'routeDoc' => $fileName,
      ));

      $fiche->removeRessource($ressource);

      $em->remove($ressource);
      $em->persist($fiche);
      $em->flush();

      return $this->redirectToRoute('app_fiche', array(
        'id_fiche'  => $ficheId, 
        'id_groupe' => $groupeId,
      ));
    }

    public function indexAction()
    {
    
    }
}
