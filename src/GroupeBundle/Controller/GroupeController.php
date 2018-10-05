<?php

namespace GroupeBundle\Controller;

use GroupeBundle\Entity\Groupe;
use GroupeBundle\Entity\Membre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class GroupeController extends Controller
{
    public function indexAction($groupeId)
    {
        try {
            $em     = $this->getDoctrine()->getManager();
            $membre = $em
                ->getRepository('GroupeBundle:Membre')
                ->findOneBy(array(
                    'user'   => $this->getUser(),
                    'groupe' => $groupeId,
                ));

            if ($this->get('app.role_validator')->roleUser($membre)) {
                throw new AccessDeniedException('Vous n\'avez pas accès à ce groupe.');
            }

            $groupe = $em
                ->getRepository('GroupeBundle:Groupe')
                ->getGroupe($groupeId);

            $fiches = $em
                ->getRepository('FicheBundle:Fiche')
                ->getFichesByGroupe($groupeId, 4, 0);

            return $this->render('GroupeBundle:Groupe:index.html.twig', array(
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
            if ($this->get('app.role_validator')->maxGroupe($this->getUser(), $this->getParameter('max_groupe'))) {
                throw new \Exception("Vous avez atteint la limit de création de groupe (". $this->getParameter('max_groupe') ."), pour ne plus être limité passez premium !\n ");
            }

            $form = $this->createForm('GroupeBundle\Form\GroupeType');
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $groupe = $this->get('groupe_bundle.manager.groupe')->buildGroupe(
                    $form,
                    $this->get('app.uploader'),
                    $this->getParameter('avatar_directory')
                );

                return $this->redirectToRoute('app_groupe', array('groupeId' => $groupe->getId()));
            }

            return $this->render('GroupeBundle:Groupe:add.html.twig', array(
                'form'   => $form->createView()
            ));
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add('danger', $e->getMessage());
            
            return $this->redirectToRoute('app_home');
        }
    }

    public function editAction(Request $request, $groupeId)
    {
        try {
            $em = $this->getDoctrine()->getManager();

            $groupe = $em
              ->getRepository('GroupeBundle:Groupe')
              ->find($groupeId);

            if ($this->get('app.role_validator')->author($this->getUser(), $groupe)) {
                throw new AccessDeniedException('Vous devez etre l\'auteur de ce groupe pour pouvoir le modifier');
            }

            $editForm = $this->createForm('GroupeBundle\Form\GroupeType', $groupe);

            $editForm->handleRequest($request);

            if ($editForm->isSubmitted() && $editForm->isValid()) {
                if ($editForm->get('avatar')->getData() !== null) {
                    $fileName = $this->get('app.uploader')->upload(
                        $this->getParameter('avatar_directory'), 
                        $editForm->get('avatar')->getData()
                    );

                    $groupe->setAvatar($fileName);
                }

                $em->persist($groupe);
                $em->flush();

                return $this->redirectToRoute('app_groupe', array(
                    'groupeId' => $groupe->getId()
                ));
            }

            return $this->render('GroupeBundle:Groupe:edit.html.twig', array(
                'groupe'   => $groupe,
                'editForm' => $editForm->createView()
            ));
        } catch (AccessDeniedException $e) {
            $this->get('session')->getFlashBag()->add('danger', $e->getMessage());
            
            return $this->redirectToRoute('app_groupe', array(
                'groupeId' => $groupeId
            ));
        }
    }


    public function deleteAction($groupeId)
    {
        try {
            $em = $this->getDoctrine()->getManager();

            $groupe = $em
              ->getRepository('GroupeBundle:Groupe')
              ->find($groupeId);


            if ($this->get('app.role_validator')->author($this->getUser(), $groupe)) {
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

    public function groupeInfiniteScrollAction(Request $request, $offset)
    {
        $limit  = $request->request->get('limit');
        $fiches = $this->getDoctrine()->getManager()
            ->getRepository('FicheBundle:Fiche')
            ->getFichesByGroupe($request->request->get('groupeId'), $limit, $offset);

        return $this->render('FicheBundle:Fiche:template.html.twig', array(
            'fiches' => $fiches
        ));
    }
}