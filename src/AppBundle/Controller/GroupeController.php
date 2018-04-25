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
        try {
            $em = $this->getDoctrine()->getManager();

            $membre = $em
                ->getRepository('AppBundle:Membre')
                ->findOneBy(array(
                    'user'   => $this->getUser(),
                    'groupe' => $id_groupe,
                ));
            
            if ($membre === null || !$membre->hasRole('ROLE_USER')) {
                throw new AccessDeniedException('Vous n\'avez pas accès à ce groupe.');
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
        } catch (AccessDeniedException $e) {
            $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

            return $this->redirectToRoute('app_home');
        }
    }

    public function addAction(Request $request)
    {
        try {
            if (!$this->getUser()->isPremium() && count($this->getUser()->getGroupe()) > $this->getParameter('max_groupe')) {
                throw new \Exception("Vous avez atteint la limit de création de groupe (2), pour ne plus être limité passez premium !\n ");                
            }
            $groupe = new Groupe();
            $form   = $this->createForm('AppBundle\Form\GroupeType', $groupe);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                if ($form->get('avatar')->getData() !== null) {
                    $avatar   = $form->get('avatar')->getData();
                    $fileName = md5(uniqid()).'.'.$avatar->guessExtension();

                    $avatar->move($this->getParameter('avatar_directory'), $fileName);
                    $groupe->setAvatar($fileName);
                }
                $groupe->setUser($this->getUser());
                $membre = new Membre();
                $membre->setUser($this->getUser());
                $membre->setAdmin();
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
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add('danger', $e->getMessage());
            
            return $this->redirectToRoute('app_home');
        }
    }

    public function editAction(Request $request, $id_groupe)
    {
        try {
            $em = $this->getDoctrine()->getManager();

            $groupe = $em
              ->getRepository('AppBundle:Groupe')
              ->find($id_groupe);

            if ($groupe->getUser() !== $this->getUser()) {
                throw new AccessDeniedException('Vous devez etre l\'auteur de ce groupe pour pouvoir le modifier');
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

                return $this->redirectToRoute('app_groupe', array(
                    'id_groupe' => $groupe->getId()
                ));
            }

            return $this->render('AppBundle:Groupe:edit.html.twig', array(
                'groupe'   => $groupe,
                'editForm' => $editForm->createView()
            ));
        } catch (AccessDeniedException $e) {
            $this->get('session')->getFlashBag()->add('danger', $e->getMessage());
            
            return $this->redirectToRoute('app_groupe', array(
                'id_groupe' => $id_groupe
            ));
        }
    }


    public function deleteAction($id_groupe)
    {
        try {
            $em = $this->getDoctrine()->getManager();

            $groupe = $em
              ->getRepository('AppBundle:Groupe')
              ->find($id_groupe);

            if ($groupe->getUser() !== $this->getUser()) {
                throw new AccessDeniedException('Vous devez être le créateur de ce groupe pour pouvoir le supprimer.');
            }

            $em->remove($groupe);
            $em->flush();

            return $this->redirectToRoute('app_home');
        } catch (AccessDeniedException $e) {
            $this->get('session')->getFlashBag()->add('danger', $e->getMessage());
            
            return $this->redirectToRoute('app_home');
        }
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