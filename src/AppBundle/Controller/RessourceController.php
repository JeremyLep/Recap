<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ressource;
use AppBundle\Entity\Notification;
use AppBundle\Entity\UserNotif;
use AppBundle\Form\RessourceType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class RessourceController extends Controller
{
    public function addAction(Request $request, $groupeId, $ficheId)
    {
      try {
        $em = $this->getDoctrine()->getManager();

        $fiche = $em
          ->getRepository('AppBundle:Fiche')
          ->findOneBy(array(
            'id'     => $ficheId,
            'groupe' => $groupeId,
          ));

        if ($fiche === null) {
          throw new NotFoundHttpException('Vous ne pouvez pas ajouter des ressources sur ce groupe');
        }

        $membre = $em
          ->getRepository('AppBundle:Membre')
          ->findOneBy(array(
              'user'   => $this->getUser(),
              'groupe' => $groupeId,
          ));
        
        if ($membre === null || $fiche->getAuteur()->getId() !== $membre->getUser()->getId()) {
          if (!$membre->hasRole('ROLE_RESSOURCE')) {
            throw new AccessDeniedException('Vous ne pouvez pas ajouter des ressources sur ce groupe');
          }
        }

        $ressource = new Ressource();
        $form      = $this->createForm(RessourceType::class, $ressource);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          $file = $ressource->getRouteDoc();

          switch ($file->guessExtension()) {
            case "pdf":
              $imageRessource = "pdf.png";
            break;
            
            case "doc":
            case "docx":
            case "odt":
                $imageRessource = "word.png";
            break;
            
            case "xls":
            case "xlsx":
              $imageRessource = "excel.png";
            break;

            case "ppt":
            case "pptx":
            case "odp":
              $imageRessource = "powerpoint.png";
            break;
            
            case "mp4":
            case "avi":
            case "mov":
            case "wmv":
            case "mpeg":
            case "mpg":
            case "wma":
            case "wmv":
            case "flv":
            case "xvid":
                $imageRessource = "video.png";
            break;

            case "jpg":
            case "jpeg":
            case "png":
            case "bmp":
                $imageRessource = "image.jpg";
            break;
          }
          
          $fileName = md5(uniqid()).'.'.$file->guessExtension();
          $route = $this->getParameter('ressource_dir')."groupe".$fiche->getGroupe()->getId()."/fiche".$fiche->getId()."/";
          if (!is_dir($route)) {
            mkdir($route, 0777, true);
          }
          $file->move($route, $fileName);
          $ressource->setRouteDoc($fileName);
          $ressource->setFiche($fiche);

          $ressource->setImage($imageRessource);
          $fiche->addRessource($ressource);
          
          $notification = new Notification();
          $notification->setFiche($fiche);
          $notification->setAuteur($this->getUser());
          $notification->setNbRessource(count($ressource));

          $em->persist($notification);

          $membres = $fiche->getGroupe()->getMembre();
          
          foreach ($membres as $membre) {
            $user = $membre->getUser();
            
            if ($user !== $this->getUser()) {
              $userNotif = new UserNotif();
              $userNotif->setNotification($notification);
              $userNotif->setUser($membre->getUser());

              $em->persist($userNotif);
              $em->flush();
            }
          }

          $em->persist($notification);
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
      } catch (UploadException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'id_groupe' => $groupeId,
          'id_fiche' => $ficheId
        ));
      } catch (NotFoundHttpException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'id_groupe' => $groupeId,
          'id_fiche' => $ficheId
        ));
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'id_groupe' => $groupeId,
          'id_fiche' => $ficheId
        ));
      }
    }

    public function viewAction(Request $request, $groupeId, $ficheId)
    {
      try {
        if ($request->isXmlHttpRequest()) {
          $fileName = $request->get('fileName');
          $em    = $this->getDoctrine()->getManager();  
          $membre = $em
              ->getRepository('AppBundle:Membre')
              ->findOneBy(array(
                  'user'   => $this->getUser(),
                  'groupe' => $groupeId,
              ));
          
          if ($membre === null || !$membre->hasRole('ROLE_USER')) {
            throw new AccessDeniedException('Vous n\'avez pas accès à cette ressource.');
          }

          $fiche = $em
            ->getRepository('AppBundle:Fiche')
            ->findOneBy(array(
              'id'        => $ficheId, 
              'groupe'    => $groupeId,
            ));

          $ressource = $em
            ->getRepository('AppBundle:Ressource')
            ->findOneBy(array(
              'routeDoc' => $fileName
            ));

          $file = "/bundles/app/files/groupe".$fiche->getGroupe()->getId()."/fiche".$fiche->getId()."/".$fileName;

          switch ($ressource->getImage()) {
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
          }

          //$file = "/var/www/recap/web".$file;
          
          return new JsonResponse(array(
            "content" => $file,
            "type"    => "file"
          ));
        }
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'id_groupe' => $groupeId,
          'id_fiche' => $ficheId
        ));
      }
    }

    public function downloadAction($groupeId, $ficheId, $fileName)
    {
      try {
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
          'id_groupe' => $groupeId,
          'id_fiche'  => $ficheId
        ));
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'id_groupe' => $groupeId,
          'id_fiche'  => $ficheId
        ));
      }
    }

    public function deleteAction(Request $request, $groupeId, $ficheId)
    {
      try {
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
        
        if ($membre === null || !$membre->hasRole('ROLE_ADMIN') || ($membre->hasRole('ROLE_RESSOURCE') && !($fiche->getAuteur()->getId() == $membre->getUser()->getId()) )) {
          throw new AccessDeniedException('Vous ne pouvez pas supprimer de ressources sur cette fiche.');
        }

        if ($fiche === null) {
          throw new NotFoundHttpException('Vous essayez de supprimer une ressource d\'une fiche inexistante.');
        }

        $ressource = $em
          ->getRepository('AppBundle:Ressource')
          ->findOneBy(array(
            'fiche' => $ficheId,
            'routeDoc' => $fileName,
          ));

        if ($ressource === null) {
          throw new NotFoundHttpException('Vous essayez de supprimer une ressource inexistante.');
        }

        $fiche->removeRessource($ressource);

        $em->remove($ressource);
        $em->persist($fiche);
        $em->flush();

        return $this->redirectToRoute('app_fiche', array(
          'id_fiche'  => $ficheId, 
          'id_groupe' => $groupeId,
        ));
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'id_fiche' => $ficheId,
          'id_groupe' => $groupeId
        ));
      } catch (NotFoundHttpException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'id_fiche' => $ficheId,
          'id_groupe' => $groupeId
        ));
      }
    }
}
