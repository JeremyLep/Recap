<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use AppBundle\Entity\Fiche;

class FicheController extends Controller
{
    public function indexAction($id_groupe, $id_fiche)
    {
      $em    = $this->getDoctrine()->getManager();
      $fiche = $em
        ->getRepository('AppBundle:Fiche')
        ->findOneBy(array(
          'id'        => $id_fiche, 
          'groupe'    => $id_groupe,
        ));

      if (!$fiche) {
        throw $this->createNotFoundException('La fiche n\'existe pas');
      }
      $groupe       = $fiche->getGroupe();
      $commentaires = $fiche->getCommentaire();
      $ressources   = $fiche->getRessource();     
      $tags         = $fiche->getTag();

      return $this->render('AppBundle:Fiche:index.html.twig', array(
          'fiche'        => $fiche,
          'groupe'       => $groupe,
          'commentaires' => $commentaires,
          'ressources'   => $ressources,
          'tags'         => $tags,
          'id_groupe'    => $id_groupe,
      ));
    }

    public function addAction(Request $request, $id_groupe)
    {
      $fiche = new Fiche();
      $form  = $this->createForm('AppBundle\Form\FicheType', $fiche);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $groupe = $em
          ->getRepository('AppBundle:Groupe')
          ->find($id_groupe);

        //$fiche->setAuteur($this->getUser());
        $fiche->setGroupe($groupe);

        $groupe->addFiche($fiche);

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
          'id_groupe' => $id_groupe,
      ));
    }

    public function editAction(Request $request, $id_groupe, $id_fiche)
    {
      $em = $this->getDoctrine()->getManager();

      $fiche = $em
        ->getRepository('AppBundle:Fiche')
        ->find($id_fiche);

      $deleteForm = $this->createDeleteForm($id_fiche, $id_groupe);
      $editForm   = $this->createForm('AppBundle\Form\FicheType', $fiche);
      $editForm->handleRequest($request);

      if ($editForm->isSubmitted() && $editForm->isValid()) {
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('app_fiche_edit', array(
            'id_fiche' => $fiche->getId(),
            'id_groupe'=> $id_groupe, 
          ));
      }

      return $this->render('AppBundle:Fiche:edit.html.twig', array(
          'fiche'       => $fiche,
          'id_groupe'   => $id_groupe,
          'edit_form'   => $editForm->createView(),
          'delete_form' => $deleteForm->createView(),
      ));
    }

    public function deleteAction(Request $request, $id_groupe, $id_fiche)
    {
      $em = $this->getDoctrine()->getManager();

      $fiche = $em
        ->getRepository('AppBundle:Fiche')
        ->find($id_fiche);

      $form = $this->createDeleteForm($fiche);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($fiche);
        $em->flush();
      }

      return $this->redirectToRoute('AppBundle:Fiche:index.html.twig');
    }
    /**
     * Delete fiche entity
     *
     * @param Fiche $fiche
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id_fiche, $id_groupe)
    {
      return $this->createFormBuilder()
          ->setAction($this->generateUrl('app_fiche_delete', array(
            'id_fiche'  => $id_fiche, 
            'id_groupe' => $id_groupe
          )))
          ->setMethod('DELETE')
          ->getForm();
    }
}