<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller
{
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listGroupes = $em
            ->getRepository('GroupeBundle:Groupe')
            ->getUserGroupe($this->getUser()->getId());

        $nbInfoMenu = $em
            ->getRepository('UserBundle:User')
            ->getInfoMenu($this->getUser());

        return $this->render('AppBundle:Menu:listGroupe.html.twig', array(
            'listGroupes' => $listGroupes,
            'nbFiche'     => $nbInfoMenu['count_fiche'],
            'nbFavoris'   => $nbInfoMenu['count_favoris'],
            'nbInvite'    => $nbInfoMenu['count_invite'],
            'nbRessource' => $nbInfoMenu['count_ressource']
        ));
    }

    public function menuTopAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nbInvite = $this->getDoctrine()->getManager()
            ->getRepository('GroupeBundle:Invite')
            ->countInviteActive($this->getUser()->getEmail());

        return $this->render('AppBundle:Default:invite.html.twig', array(
            'nbInvite' => $nbInvite
        ));
    }

    public function menuNotifAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nbNotif = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:UserNotif')
            ->countNotif($this->getUser()->getId());

        return $this->render('AppBundle:Default:notif.html.twig', array(
            'nbNotif' => $nbNotif
        ));
    }

    public function indexAction(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();

            $securityContext = $this->get('security.authorization_checker');
            
            if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
                throw new AccessDeniedException();
            }

            $listGroupes = $em
                ->getRepository('GroupeBundle:Groupe')
                ->getGroupeMembre($this->getUser()->getId(), 0, 3);

            $nbFicheAccess = $em
                ->getRepository('GroupeBundle:Groupe')
                ->countFicheAccess($this->getUser()->getId());

            return $this->render('AppBundle:Default:index.html.twig', array(
                'listGroupes'   => $listGroupes,
                'nbFicheAccess' => $nbFicheAccess,
                'filesize'      => $this->getUser()->getFilesize(),
                'maxFilesize'   => $this->getParameter('max_filesize')
            ));
        } catch (AccessDeniedException $e) {
            return $this->redirectToRoute('fos_user_login');
        }
    }

    public function dashboardInfiniteScrollAction(Request $request, $offset)
    {
        $limit       = $request->request->get('limit');
        $listGroupes = $this->getDoctrine()->getManager()
            ->getRepository('GroupeBundle:Groupe')
            ->getGroupeMembre($this->getUser()->getId(), $offset, $limit);

        return $this->render('AppBundle:Default:template.html.twig', array(
            'listGroupes' => $listGroupes
        ));
    }
}