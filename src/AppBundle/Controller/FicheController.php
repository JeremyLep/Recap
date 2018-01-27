<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use AppBundle\Entity\Fiche;
use AppBundle\Entity\Commentaire;
use AppBundle\Entity\Membre;
use AppBundle\Entity\Tag;
use AppBundle\Form\FicheType;
use AppBundle\Form\CommentaireType;

class FicheController extends Controller
{
    public function indexAction(Request $request, $id_groupe, $id_fiche)
    {
      $em    = $this->getDoctrine()->getManager();
      $fiche = $em
        ->getRepository('AppBundle:Fiche')
        ->findOneBy(array(
          'id'        => $id_fiche, 
          'groupe'    => $id_groupe,
        ));

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

      $membre = $em->getRepository('AppBundle:Membre')
                    ->find($this->getUser());

      if (!$fiche) {
        throw $this->createNotFoundException('La fiche n\'existe pas');
      }
      $commentaire = new Commentaire;
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
          'favoris'      => $favoris
      ));
    }

    public function addAction(Request $request, $id_groupe)
    {
      $em    = $this->getDoctrine()->getManager();
      $tags  = $em
        ->getRepository('AppBundle:Tag')
        ->findAll();
      $groupe = $em
        ->getRepository('AppBundle:Groupe')
        ->find($id_groupe);

      $fiche  = new Fiche();
      $form   = $this->createForm(FicheType::class, $fiche, array(
        'tag' => $tags));

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {

        $tags = $form->get('tag')->getData();

        $membre = $em->getRepository('AppBundle:Membre')
                     ->find($this->getUser());

        $fiche->setAuteur($membre);
        $fiche->setGroupe($groupe);

        $groupe->addFiche($fiche);
        
        foreach ($tags as $tag) {
          $tag = $em->getRepository('AppBundle:Tag')->find($tag);
          $fiche->addTag($tag);
        }

        if (!empty($_POST['addTag'])) {
          $addTags = $_POST['addTag'];
          
          foreach ($addTags as $addTag) {
            $newTag = new Tag;
            $newTag->setLabel($addTag);
            $fiche->addTag($newTag);
            $em->persist($newTag);
          }
        }

        $em->persist($groupe);
        $em->persist($fiche);

        $em->flush();
 
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
    }

    public function editAction(Request $request, $id_groupe, $id_fiche)
    {
      $em = $this->getDoctrine()->getManager();

      $fiche = $em
        ->getRepository('AppBundle:Fiche')
        ->find($id_fiche);
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
    }

    public function deleteAction($id_groupe, $id_fiche)
    {
      $em = $this->getDoctrine()->getManager();

      $fiche = $em
        ->getRepository('AppBundle:Fiche')
        ->find($id_fiche);
      
      $groupe = $fiche->getGroupe();
      $groupe->removeFiche($fiche);

      $em = $this->getDoctrine()->getManager();
      $em->persist($groupe);
      $em->remove($fiche);
      $em->flush();
  
      return $this->redirectToRoute('app_groupe', array(
        'id_groupe' => $id_groupe
      ));
    }
}