<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Groupe;
use AppBundle\Entity\Membre;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class GroupeController extends Controller
{
    public function indexAction($id_groupe)
    {
        $em = $this->getDoctrine()->getManager();

        $membre = $em
            ->getRepository('AppBundle:Membre')
            ->findOneBy(array(
                'user'   => $this->getUser(),
                'groupe' => $id_groupe,
            ));
        
        if ($membre === null || !$membre->hasRole('ROLE_USER')) {
            throw new AccessDeniedException();
        }

        $groupe = $em
            ->getRepository('AppBundle:Groupe')
            ->getGroupe($id_groupe);

        $fiches = $em
            ->getRepository('AppBundle:Fiche')
            ->findBy(array('groupe' => $id_groupe), null, 4, 0);
        
         return $this->render('AppBundle:Groupe:index.html.twig', array(
            'groupe' => $groupe,
            'membre' => $membre,
            'fiches' => $fiches
        ));
    }

    public function addAction(Request $request)
    {
        $groupe = new Groupe();
        $form   = $this->createForm('AppBundle\Form\GroupeType', $groupe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avatar    = $form->get('avatar')->getData();
            $fileName  = md5(uniqid()).'.'.$avatar->guessExtension();

            $avatar->move($this->getParameter('avatar_directory'), $fileName);
            $groupe->setAvatar($fileName);
            
            $groupe->setUser($this->getUser());
            $membre = new Membre();
            $membre->setUser($this->getUser());
            $membre->setRoles(array('ROLE_ADMIN', 'ROLE_MODO', 'ROLE_USER'));
            $membre->setGroupe($groupe);

            $em = $this->getDoctrine()->getManager();
            $em->persist($groupe);
            $em->persist($membre);
            $em->flush();

            return $this->redirectToRoute('app_groupe', array('id_groupe' => $groupe->getId()));
        }

        return $this->render('AppBundle:Groupe:add.html.twig', array(
            'groupe' => $groupe,
            'form'   => $form->createView(),
        ));
    }

    public function editAction(Request $request, $id_groupe)
    {
        $em = $this->getDoctrine()->getManager();

        $groupe = $em
          ->getRepository('AppBundle:Groupe')
          ->find($id_groupe);

        if ($groupe->getUser() !== $this->getUser()) {
            throw new AccessDeniedException();
        }

        $editForm = $this->createForm('AppBundle\Form\GroupeType', $groupe);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $avatar    = $editForm->get('avatar')->getData();
            $fileName  = md5(uniqid()).'.'.$avatar->guessExtension();

            $avatar->move($this->getParameter('avatar_directory'), $fileName);
            $groupe->setAvatar($fileName);

            $em->persist($groupe);
            $em->flush();

            return $this->redirectToRoute('app_groupe_edit', array(
                'id_groupe' => $groupe->getId()
            ));
        }

        return $this->render('AppBundle:Groupe:edit.html.twig', array(
            'groupe'   => $groupe,
            'editForm' => $editForm->createView()
        ));
    }


    public function deleteAction($id_groupe)
    {
        $em = $this->getDoctrine()->getManager();

        $groupe = $em
          ->getRepository('AppBundle:Groupe')
          ->find($id_groupe);

        if ($groupe->getUser() !== $this->getUser()) {
            throw new AccessDeniedException();
        }

        $em->remove($groupe);
        $em->flush();

        return $this->redirectToRoute('app_home');
    }

    public function groupeInfiniteScrollAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $offset = $request->request->get('offset');
        $limit  = $request->request->get('limit');

        $fiches = $em
            ->getRepository('AppBundle:Fiche')
            ->findBy(array('groupe' => $request->request->get('groupeId')), null, $limit, $offset);

        return $this->render('AppBundle:Fiche:template.html.twig', array(
            'fiches' => $fiches
        ));
    }
}
