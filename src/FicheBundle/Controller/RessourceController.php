<?php

namespace FicheBundle\Controller;

use FicheBundle\Form\RessourceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use FicheBundle\EventListener\FicheEvent;
use FicheBundle\EventListener\FicheEvents;

class RessourceController extends Controller
{
    public function addAction(Request $request, $groupeId, $ficheId)
    {
      try {
        $em = $this->getDoctrine()->getManager();

        $fiche = $em
          ->getRepository('FicheBundle:Fiche')
          ->findOneBy(array(
            'id' => $ficheId
          ));

        if ($fiche === null) {
          throw new NotFoundHttpException('Vous ne pouvez pas ajouter des ressources sur ce groupe.');
        }

        $membre = $em
          ->getRepository('GroupeBundle:Membre')
          ->findOneBy(array(
              'user'   => $this->getUser(),
              'groupe' => $groupeId,
          ));

        if ($this->get('app.role_validator')->roleRessource($membre, $fiche)) {
          throw new AccessDeniedException('Vous ne pouvez pas ajouter des ressources sur ce groupe.');
        }

        $user        = $this->getUser();
        $maxFilesize = $this->getParameter('max_filesize');
        $form        = $this->createForm('FicheBundle\Form\RessourceType');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          $file         = $form->get('routeDoc')->getData();
          $titre        = $form->get('titre')->getData();

          $ressource = $this->get('fiche_bundle.factory')->buildRessource($file, $titre, $fiche);

          $fiche->addRessource($ressource);

          $user->setFilesize(filesize($file));
          
          $ressource->setAuteur($user);

          $event      = new FicheEvent($fiche, $user, count($ressource));
          $dispatcher = $this->get('event_dispatcher');
          
          $dispatcher->dispatch(
            FicheEvents::FICHE_CREATED_NOTIF,
            $event
          );

          $em->persist($fiche);
          $em->persist($ressource);
          $em->persist($user);
          $em->flush();

          return $this->redirectToRoute('app_fiche', array(
            'ficheId'  => $fiche->getId(), 
            'groupeId' => $groupeId,
          ));
        }

        return $this->render('FicheBundle:Fiche:addRessource.html.twig', array(
            'fiche'       => $fiche,
            'form'        => $form->createView(),
            'groupe'      => $fiche->getGroupe(),
            'filesize'    => $user->getFilesize(),
            'maxFilesize' => $maxFilesize
        ));
      } catch (UploadException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'groupeId' => $groupeId,
          'ficheId'  => $ficheId
        ));
      } catch (NotFoundHttpException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'groupeId' => $groupeId,
          'ficheId'  => $ficheId
        ));
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'groupeId' => $groupeId,
          'ficheId'  => $ficheId
        ));
      } catch (\Exception $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->render('FicheBundle:Fiche:addRessource.html.twig', array(
            'fiche'       => $fiche,
            'form'        => $form->createView(),
            'groupe'      => $fiche->getGroupe(),
            'filesize'    => $user->convertFilesize($user->getFilesize()),
            'maxFilesize' => $maxFilesize
        ));
      }
    }

    public function viewAction(Request $request)
    {
      try {
        $em       = $this->getDoctrine()->getManager();
        $fileName = $request->get('fileName');

        // get ressoource join fiche
        $ressource = $em
          ->getRepository('FicheBundle:Ressource')
          ->findOneBy(array(
            'routeDoc' => $fileName
          ));

        $fiche = $ressource->getFiche();

        $membre = $em
          ->getRepository('GroupeBundle:Membre')
          ->findOneBy(array(
            'user'   => $this->getUser(),  
            'groupe' => $fiche->getGroupe(),
          ));

        if ($this->get('app.role_validator')->roleUser($membre)) {
          throw new AccessDeniedException('Vous n\'avez pas accès à cette ressource.');
        }

        $file = "/bundles/app/files/groupe".$fiche->getGroupe()->getId()."/fiche".$fiche->getId()."/".$fileName;

        return $this->loadFile($ressource->getImage(), $file);

      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'groupeId' => $fiche->getGroupe()->getId(),
          'ficheId'  => $fiche->getId()
        ));
      }
    }

    public function downloadAction($groupeId, $ficheId, $fileName)
    {
      try {
        $em    = $this->getDoctrine()->getManager();
        
        $fiche = $em
          ->getRepository('FicheBundle:Fiche')
          ->findOneBy(array(
            'id'     => $ficheId, 
            'groupe' => $groupeId,
          ));

        $membre = $em
          ->getRepository('GroupeBundle:Membre')
          ->findOneBy(array(
            'user'   => $this->getUser(),
            'groupe' => $groupeId,
          ));

        if ($this->get('app.role_validator')->roleUser($membre)) {
          throw new AccessDeniedException('Vous ne pouvez pas télécharger cette ressource.');
        }

        $file = $this->getParameter('ressource_dir')."groupe".$fiche->getGroupe()->getId()."/fiche".$fiche->getId()."/".$fileName;

        if (!file_exists($file)) {
          throw new FileNotFoundException('Le fichier n\'existe pas.');
        }
        
        $response = new BinaryFileResponse($file);
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

        return $response;

      } catch (FileNotFoundException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'groupeId' => $groupeId,
          'ficheId'  => $ficheId
        ));
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'groupeId' => $groupeId,
          'ficheId'  => $ficheId
        ));
      }
    }

    public function deleteAction(Request $request)
    {
      try {
        $em = $this->getDoctrine()->getManager();
        
        $fileName = $request->request->get('route');

        $ressource = $em
          ->getRepository('FicheBundle:Ressource')
          ->findOneBy(array(
            'routeDoc' => $fileName,
          ));

        if ($ressource === null) {
          throw new NotFoundHttpException('Vous essayez de supprimer une ressource inexistante.');
        }

        $fiche = $em
          ->getRepository('FicheBundle:Fiche')
          ->findOneBy(array(
            'id' => $ressource->getFiche()->getId(),
        ));

        if ($fiche === null) {
          throw new NotFoundHttpException('Vous essayez de supprimer une ressource d\'une fiche inexistante.');
        }

        $membre = $em
          ->getRepository('GroupeBundle:Membre')
          ->findOneBy(array(
              'user'   => $this->getUser(),
              'groupe' => $fiche->getGroupe()->getId(),
          ));

        if ($this->get('app.role_validator')->deleteRessource($membre, $fiche)) {
          throw new AccessDeniedException('Vous ne pouvez pas supprimer de ressources sur cette fiche.');
        }

        $route = $this->getParameter('ressource_dir')."groupe".$fiche->getGroupe()->getId()."/fiche".$fiche->getId()."/";

        $user = $ressource->getAuteur()->deleteFilesize(filesize($route.$fileName));

        $fiche->removeRessource($ressource);

        $em->remove($ressource);
        $em->persist($fiche);
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('app_fiche', array(
          'ficheId'  => $fiche->getId(), 
          'groupeId' => $fiche->getGroupe()->getId(),
        ));
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'ficheId'  => $fiche->getId(),
          'groupeId' => $fiche->getGroupe()->getId()
        ));
      } catch (NotFoundHttpException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'ficheId'  => $fiche->getId(),
          'groupeId' => $fiche->getGroupe()->getId()
        ));
      } catch (\Exception $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'ficheId'  => $fiche->getId(),
          'groupeId' => $fiche->getGroupe()->getId()
        ));
      }
    }

    private function loadFile($ressourceImg, $file)
    {
        switch ($ressourceImg) {
            case "word.png":
            case "powerpoint.png":
            case "excel.png":
              return new JsonResponse(array(
                "content" => "<iframe src='https://view.officeapps.live.com/op/view.aspx?src=/var/www/recap/web".$file."' width='100%' height='100%' frameborder='0'></iframe>",
                "type" => "office"
              ));
            break;
            case "video.png":
              return new JsonResponse(array(
                "content" => $file,
                "type"    => "video"
              ));
            break;
            case "image.jpg":
              return new JsonResponse(array(
                "content" => $file,
                "type"    => "image"
              ));
            break;
            default:
              return new JsonResponse(array(
                "content" => $file,
                "type"    => "file"
              ));
        }
    }
}