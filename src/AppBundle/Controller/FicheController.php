<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use AppBundle\Entity\Fiche;
use AppBundle\Entity\Commentaire;
use AppBundle\Entity\Membre;
use AppBundle\Entity\Tag;
use AppBundle\Entity\Note;
use AppBundle\Entity\Notification;
use AppBundle\Entity\UserNotif;
use AppBundle\Form\FicheType;
use AppBundle\Form\CommentaireType;

class FicheController extends Controller
{
    public function indexAction(Request $request, $id_groupe, $id_fiche)
    {
      try {
        $em    = $this->getDoctrine()->getManager();

        $membre = $em
              ->getRepository('AppBundle:Membre')
              ->findOneBy(array(
                  'user'   => $this->getUser(),
                  'groupe' => $id_groupe,
              ));

        if ($membre === null || !$membre->hasRole('ROLE_USER')) {
          throw new AccessDeniedException('Vous n\'avez pas accès à cette fiche.');
        }

        $fiche = $em
          ->getRepository('AppBundle:Fiche')
          ->findOneBy(array(
            'id'        => $id_fiche, 
            'groupe'    => $id_groupe
          ));

        if ($fiche === null) {
          throw new NotFoundHttpException('La fiche demandé n\'existe pas.');
        }

        $favoris = $em
          ->getRepository('AppBundle:Favoris')
          ->findOneBy(array(
            'fiche' => $id_fiche, 
            'user'  => $this->getUser(),
          ));
          
        if ($favoris === null) {
          $favoris = false;
        }
        else {
          $favoris = true;
        }

        $commentaire = new Commentaire;
        $form        = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          $membre = $em->getRepository('AppBundle:Membre')
                     ->find($this->getUser());
          $commentaire->setMembre($membre);
          $commentaire->setFiche($fiche);
          $fiche->addCommentaire($commentaire);
          $em->persist($fiche);
          $em->persist($commentaire);
          $em->flush();

          return $this->redirectToRoute('app_fiche', array(
            'id_fiche'  => $fiche->getId(), 
            'id_groupe' => $fiche->getGroupe()->getId(),
          ));
        }

        return $this->render('AppBundle:Fiche:index.html.twig', array(
            'fiche'        => $fiche,
            'groupe'       => $fiche->getGroupe(),
            'commentaires' => $fiche->getCommentaire(),
            'ressources'   => $fiche->getRessource(),
            'tags'         => $fiche->getTag(),
            'form'         => $form->createView(),
            'favoris'      => $favoris,
            'membre'       => $membre
        ));
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_groupe', array('id_groupe' => $id_groupe));
      } catch (NotFoundHttpException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_groupe', array('id_groupe' => $id_groupe));
      }
    }

    public function addAction(Request $request, $id_groupe)
    {
      try {
        $em    = $this->getDoctrine()->getManager();
        
        $membre = $em
              ->getRepository('AppBundle:Membre')
              ->findOneBy(array(
                  'user'   => $this->getUser(),
                  'groupe' => $id_groupe,
              ));
        
        if ($membre === null || !$membre->hasRole('ROLE_POST')) {
          throw new AccessDeniedException('Vous ne pouvez pas poster de fiche dans ce groupe.');
        }

        $groupe = $em
          ->getRepository('AppBundle:Groupe')
          ->find($id_groupe);

        if ($groupe === null) {
          throw new NotFoundHttpException('Vous avez essayé d\'ajouter une fiche dans un groupe inexistant.');
        }

        $tags  = $em
          ->getRepository('AppBundle:Tag')
          ->findAll();

        $fiche  = new Fiche();
        $form   = $this->createForm(FicheType::class, $fiche, array(
          'tag' => $tags
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

          $tags = $form->get('tag')->getData();

          $fiche->setAuteur($membre);
          $fiche->setGroupe($groupe);

          $groupe->addFiche($fiche);
          
          $membre->incremNbFiche();

          foreach ($tags as $tag) {
            $tag = $em
              ->getRepository('AppBundle:Tag')
              ->find($tag);

            $fiche->addTag($tag);
          }

          if (!empty($_POST['addTag'])) {
            $addTags = $_POST['addTag'];
            
            foreach ($addTags as $addTag) {
              $newTag = new Tag();
              $newTag->setLabel($addTag);
              $fiche->addTag($newTag);

              $em->persist($newTag);
            }
          }

          $notification = new Notification();
          $notification->setFiche($fiche);
          $notification->setAuteur($this->getUser());
          
          $em->persist($notification);
          $em->persist($groupe);
          $em->persist($fiche);
          $em->persist($membre);

          $em->flush();

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
   
          return $this->redirectToRoute('app_fiche', array(
            'id_fiche'  => $fiche->getId(), 
            'id_groupe' => $id_groupe,
          ));
        }

        return $this->render('AppBundle:Fiche:add.html.twig', array(
            'fiche'     => $fiche,
            'form'      => $form->createView(),
            'groupe'    => $groupe,
        ));
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_groupe', array(
          'id_groupe' => $id_groupe
        ));
      } catch (NotFoundHttpException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_home');
      }
    }

    public function editAction(Request $request, $id_groupe, $id_fiche)
    {
      try {
        $em = $this->getDoctrine()->getManager();

        $membre = $em
          ->getRepository('AppBundle:Membre')
          ->findOneBy(array(
              'user'   => $this->getUser(),
              'groupe' => $id_groupe,
          ));

        $fiche = $em
          ->getRepository('AppBundle:Fiche')
          ->find($id_fiche);

        if ($membre === null || $fiche->getAuteur()->getId() !== $membre->getUser()->getId()) {
          if (!$membre->hasRole('ROLE_EDIT')) {
            throw new AccessDeniedException('Vous ne pouvez pas éditer de fiche sur ce groupe.');
          }
        }
        
        if ($fiche === null) {
          throw new NotFoundHttpException('Vous essayé d\'éditer une fiche inexistante.');
        }

        $tags  = $em
          ->getRepository('AppBundle:Tag')
          ->findAll();

        $tag = $fiche->getTag();
        $usedTags = array();
        foreach ($tag as $t) {
          array_push($usedTags, $t->getId());
        }

        $editForm   = $this->createForm(FicheType::class, $fiche, array(
          'tag'     => $tags
        ));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
          $tags = $editForm->get('tag')->getData();
          $fiche->removeManyTags($fiche->getTag());

          if (!empty($_POST['addTag'])) {
            $addTags = $_POST['addTag'];
            
            foreach ($addTags as $addTag) {
              $newTag = new Tag;
              $newTag->setLabel($addTag);
              $fiche->addTag($newTag);
              $em->persist($newTag);
            }
          }

          $tags = $em->getRepository('AppBundle:Tag')->findById($tags);
          $fiche->addManyTags($tags);
          
          $em->persist($fiche);
          $em->flush();

          return $this->redirectToRoute('app_fiche', array(
              'id_fiche' => $fiche->getId(),
              'id_groupe'=> $id_groupe, 
            ));
        }

        return $this->render('AppBundle:Fiche:edit.html.twig', array(
            'fiche'    => $fiche,
            'usedTags' => $usedTags,
            'tags'     => $tags,
            'groupe'   => $fiche->getGroupe(),
            'form'     => $editForm->createView(),
        ));
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'id_groupe' => $id_groupe,
          'id_fiche' => $id_fiche
        ));
      } catch (NotFoundHttpException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_groupe', array(
          'id_groupe' => $id_groupe
        ));
      }
    }

    public function deleteAction($id_groupe, $id_fiche)
    {
      try {
        $em = $this->getDoctrine()->getManager();

        $membre = $em
          ->getRepository('AppBundle:Membre')
          ->findOneBy(array(
              'user'   => $this->getUser(),
              'groupe' => $id_groupe,
          ));

        if ($membre === null || $fiche->getAuteur()->getId() !== $membre->getUser()->getId()) {
          if (!$membre->hasRole('ROLE_EDIT')) {
            throw new AccessDeniedException('Vous ne pouvez pas supprimer de fiche sur ce groupe.');
          }
        }

        $fiche = $em
          ->getRepository('AppBundle:Fiche')
          ->find($id_fiche);
        
        if ($fiche === null) {
          throw new NotFoundHttpException('Vous essayez de supprimier une fiche inexistante.');
        }

        $groupe = $fiche->getGroupe();
        
        if ($groupe === null) {
          throw new NotFoundHttpException();
        }

        $groupe->removeFiche($fiche);

        $em = $this->getDoctrine()->getManager();
        $em->persist($groupe);
        $em->remove($fiche);
        $em->flush();
    
        return $this->redirectToRoute('app_groupe', array(
          'id_groupe' => $id_groupe
        ));
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'id_groupe' => $id_groupe,
          'id_fiche' => $id_fiche
        ));
      } catch (NotFoundHttpException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());
        
        return $this->redirectToRoute('app_groupe', array('id_groupe' => $id_groupe));
      }
    }

    public function ratingAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      
      if ($request->isXmlHttpRequest()) {

        $rate = $request->request->get('rate');
        $ficheId = $request->request->get('ficheId');

        $fiche = $em
          ->getRepository('AppBundle:Fiche')
          ->find($ficheId);

        $oldNote = $em
          ->getRepository('AppBundle:Note')
          ->findBy(array(
            'fiche'  => $fiche,
            'userId' => $this->getUser()->getId(),
          ));

        if (!empty($oldNote)) {
          
          return new JsonResponse(array(
            'message' => '<i class="fa fa-exclamation-circle"></i> Vous avez déjà noté cette fiche',
          ));
        }

        if ( ($rate < 1) || ($rate > 5) ) {
          return new JsonResponse(array(
            'message' => '<i class="fa fa-exclamation-circle"></i> Votre note doit etre comprise entre 1 et 5'
          ));
        }

        $note = new Note();
        $note->setNote($rate);
        $note->setFiche($fiche);
        $note->setUserId($this->getUser()->getId());
        $fiche->addNote($note);

        $em->persist($note);
        $em->persist($fiche);
        $em->flush();

        return $this->render('AppBundle:Fiche:rating.html.twig', array(
          'fiche' => $fiche,
        ));
      }
    }
}