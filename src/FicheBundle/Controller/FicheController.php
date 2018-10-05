<?php

namespace FicheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FicheBundle\Entity\Fiche;
use FicheBundle\Entity\Commentaire;
use FicheBundle\Entity\Tag;
use FicheBundle\Entity\Note;
use FicheBundle\Form\FicheType;
use FicheBundle\Form\CommentaireType;
use FicheBundle\EventListener\FicheEvent;
use FicheBundle\EventListener\FicheEvents;

class FicheController extends Controller
{
    public function indexAction(Request $request, $groupeId, $ficheId)
    {
      try {
        $em     = $this->getDoctrine()->getManager();
        // Get membre join user left join favoris
        $membre = $em
            ->getRepository('GroupeBundle:Membre')
            ->findOneBy(array(
                'user'   => $this->getUser(),
                'groupe' => $groupeId
            ));
        
        if ($this->get('app.role_validator')->roleUser($membre)) {
          throw new AccessDeniedException('Vous n\'avez pas accès à cette fiche.');
        }

        $fiche = $em
          ->getRepository('FicheBundle:Fiche')
          ->getFiche($ficheId);

        if ($fiche === null) {
          throw new NotFoundHttpException('La fiche demandé n\'existe pas.');
        }

        $favoris = $em
          ->getRepository('FicheBundle:Favoris')
          ->findOneBy(array(
            'fiche' => $ficheId, 
            'user'  => $this->getUser(),
          ));
          
        if ($favoris === null) {
          $favoris = false;
        }
        else {
          $favoris = true;
        }
        
        $commentaire = new Commentaire();
        $form        = $this->createForm(CommentaireType::class, $commentaire);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          $commentaire->setMembre($membre);
          $commentaire->setFiche($fiche);
          $fiche->addCommentaire($commentaire);
          $em->persist($fiche);
          $em->persist($commentaire);
          $em->flush();

          return $this->redirectToRoute('app_fiche', array(
            'ficheId'  => $fiche->getId(), 
            'groupeId' => $fiche->getGroupe()->getId(),
          ));
        }

        return $this->render('FicheBundle:Fiche:index.html.twig', array(
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

        return $this->redirectToRoute('app_groupe', array('groupeId' => $groupeId));
      } catch (NotFoundHttpException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_groupe', array('groupeId' => $groupeId));
      }
    }

    public function addAction(Request $request, $groupeId)
    {
      try {
        $em    = $this->getDoctrine()->getManager();
        
        // get membre join groupe
        $membre = $em
              ->getRepository('GroupeBundle:Membre')
              ->findOneBy(array(
                  'user'   => $this->getUser(),
                  'groupe' => $groupeId,
              ));

        if ($this->get('app.role_validator')->rolePost($membre)) {
          throw new AccessDeniedException('Vous ne pouvez pas poster de fiche dans ce groupe.');
        }

        $groupe = $em
          ->getRepository('GroupeBundle:Groupe')
          ->find($groupeId);

        if ($groupe === null) {
          throw new NotFoundHttpException('Vous avez essayé d\'ajouter une fiche dans un groupe inexistant.');
        }

        $tags = $em
          ->getRepository('FicheBundle:Tag')
          ->findAll();

        // Manager fiche & tags // param (membre,groupe,tags, em, form)
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
              ->getRepository('FicheBundle:Tag')
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
          
          $em->persist($groupe);
          $em->persist($fiche);
          $em->persist($membre);

          $em->flush();

          $event = new FicheEvent($fiche, $this->getUser());

          $dispatcher = $this->get('event_dispatcher');
          
          $dispatcher->dispatch(
            FicheEvents::FICHE_CREATED_NOTIF,
            $event
          );

          $dispatcher->dispatch(
            FicheEvents::FICHE_CREATED_MAIL,
            $event
          );

          return $this->redirectToRoute('app_fiche', array(
            'ficheId'  => $fiche->getId(), 
            'groupeId' => $groupeId,
          ));
        }

        return $this->render('FicheBundle:Fiche:add.html.twig', array(
            'fiche'  => $fiche,
            'form'   => $form->createView(),
            'groupe' => $groupe,
        ));
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_groupe', array(
          'groupeId' => $groupeId
        ));
      } catch (NotFoundHttpException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_home');
      }
    }

    public function editAction(Request $request, $groupeId, $ficheId)
    {
      try {
        $em = $this->getDoctrine()->getManager();

        $membre = $em
          ->getRepository('GroupeBundle:Membre')
          ->findOneBy(array(
              'user'   => $this->getUser(),
              'groupe' => $groupeId,
          ));

        // get fiche join tag
        $fiche = $em
          ->getRepository('FicheBundle:Fiche')
          ->find($ficheId);

        if ($this->get('app.role_validator')->roleEdit($membre, $fiche)) {
          throw new AccessDeniedException('Vous ne pouvez pas éditer de fiche sur ce groupe.');
        }

        if ($fiche === null) {
          throw new NotFoundHttpException('Vous essayé d\'éditer une fiche inexistante.');
        }

        $tags  = $em
          ->getRepository('FicheBundle:Tag')
          ->findAll();

        //
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
              $newTag = new Tag();
              $newTag->setLabel($addTag);
              $fiche->addTag($newTag);
              $em->persist($newTag);
            }
          }

          $tags = $em->getRepository('FicheBundle:Tag')->findById($tags);
          $fiche->addManyTags($tags);

          $em->persist($fiche);
          $em->flush();

          return $this->redirectToRoute('app_fiche', array(
              'ficheId'  => $fiche->getId(),
              'groupeId' => $groupeId, 
            ));
        }

        return $this->render('FicheBundle:Fiche:edit.html.twig', array(
            'fiche'    => $fiche,
            'usedTags' => $usedTags,
            'tags'     => $tags,
            'groupe'   => $fiche->getGroupe(),
            'form'     => $editForm->createView(),
        ));
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'groupeId' => $groupeId,
          'ficheId' => $ficheId
        ));
      } catch (NotFoundHttpException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_groupe', array(
          'groupeId' => $groupeId
        ));
      }
    }

    public function deleteAction($groupeId, $ficheId)
    {
      try {
        $em = $this->getDoctrine()->getManager();

        $membre = $em
          ->getRepository('GroupeBundle:Membre')
          ->findOneBy(array(
              'user'   => $this->getUser(),
              'groupe' => $groupeId,
          ));

        // get fiche join tag
        $fiche = $em
          ->getRepository('FicheBundle:Fiche')
          ->find($ficheId);

        if ($fiche === null) {
          throw new NotFoundHttpException('Vous essayez de supprimier une fiche inexistante.');
        }

        if ($this->get('app.role_validator')->roleEdit($membre, $fiche)) {
          throw new AccessDeniedException('Vous ne pouvez pas supprimer de fiche sur ce groupe.');
        }

        $groupe = $fiche->getGroupe();

        if ($groupe === null) {
          throw new NotFoundHttpException();
        }

        $groupe->removeFiche($fiche);

        $em->persist($groupe);
        $em->remove($fiche);
        $em->flush();

        return $this->redirectToRoute('app_groupe', array(
          'groupeId' => $groupeId
        ));
      } catch (AccessDeniedException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_fiche', array(
          'groupeId' => $groupeId,
          'ficheId' => $ficheId
        ));
      } catch (NotFoundHttpException $e) {
        $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

        return $this->redirectToRoute('app_groupe', array('groupeId' => $groupeId));
      }
    }

    public function ratingAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();

      $rate    = $request->request->get('rate');
      $ficheId = $request->request->get('ficheId');

      $fiche = $em
        ->getRepository('FicheBundle:Fiche')
        ->find($ficheId);

      $oldNote = $em
        ->getRepository('FicheBundle:Note')
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
          'message' => '<i class="fa fa-exclamation-circle"></i> Votre note doit être comprise entre 1 et 5'
        ));
      }

      // manager $note
      $note = new Note();
      $note->setNote($rate);
      $note->setFiche($fiche);
      $note->setUserId($this->getUser()->getId());
      $fiche->addNote($note);

      $em->persist($note);
      $em->persist($fiche);
      $em->flush();

      return $this->render('FicheBundle:Fiche:rating.html.twig', array(
        'fiche' => $fiche,
      ));
    }
}