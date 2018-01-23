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

        $groupe = $em
          ->getRepository('AppBundle:Groupe')
          ->find($id_groupe);

        return $this->render('AppBundle:Groupe:index.html.twig', array(
            'groupe' => $groupe,
        ));
    }

    public function addAction(Request $request)
    {
        $groupe = new Groupe();
        $form   = $this->createForm('AppBundle\Form\GroupeType', $groupe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $groupe->setUser($this->getUser());
            $membre = new Membre();
            $membre->setUser($this->getUser());
            $membre->setAccesLvl(3);
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

        $editForm   = $this->createForm('AppBundle\Form\GroupeType', $groupe);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_groupe_edit', array('id_groupe' => $groupe->getId()));
        }

        return $this->render('AppBundle:Groupe:edit.html.twig', array(
            'groupe'      => $groupe,
            'editForm'   => $editForm->createView()
        ));
    }


    public function deleteAction($id_groupe)
    {
        $em = $this->getDoctrine()->getManager();

        $groupe = $em
          ->getRepository('AppBundle:Groupe')
          ->find($id_groupe);

        $em->remove($groupe);
        $em->flush();

        return $this->redirectToRoute('app_home');
    }
}
