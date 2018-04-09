<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller
{
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listGroupes = $em
            ->getRepository('AppBundle:Groupe')
            ->getUserGroupe($this->getUser()->getId());

        $nbFiche = $em
            ->getRepository('AppBundle:Fiche')
            ->countMesFiches($this->getUser()->getId());

        $nbFavoris = $em
            ->getRepository('AppBundle:Favoris')
            ->countFavoris($this->getUser()->getId());

        $nbInvite = $em
            ->getRepository('AppBundle:Invite')
            ->countInviteActive($this->getUser()->getEmail());

        return $this->render('AppBundle:Menu:listGroupe.html.twig', array(
            'listGroupes' => $listGroupes,
            'nbFiche'     => $nbFiche,
            'nbFavoris'   => $nbFavoris,
            'nbInvite'    => $nbInvite
        ));
    }

    public function menuTopAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nbInvite = $em
            ->getRepository('AppBundle:Invite')
            ->countInviteActive($this->getUser()->getEmail());

        return $this->render('AppBundle:Default:invite.html.twig', array(
            'nbInvite' => $nbInvite
        ));
    }

    public function menuNotifAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nbNotif = $em
            ->getRepository('AppBundle:UserNotif')
            ->countNotif($this->getUser()->getId());

        return $this->render('AppBundle:Default:notif.html.twig', array(
            'nbNotif' => $nbNotif
        ));
    }

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $securityContext = $this->get('security.authorization_checker');
        
        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException();
        }

        $listGroupes = $em
            ->getRepository('AppBundle:Groupe')
            ->getGroupeMembre($this->getUser()->getId(), 0, 3);

        $nbFicheAccess = $em
            ->getRepository('AppBundle:Groupe')
            ->countFicheAccess($this->getUser()->getId());

        return $this->render('AppBundle:Default:index.html.twig', array(
            'listGroupes' => $listGroupes,
            'nbFicheAccess' => $nbFicheAccess
        ));
    }

    public function dashboardInfiniteScrollAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $offset = $request->request->get('offset');
        $limit  = $request->request->get('limit');

        $listGroupes = $em
            ->getRepository('AppBundle:Groupe')
            ->getGroupeMembre($this->getUser()->getId(), $offset, $limit);

        return $this->render('AppBundle:Default:template.html.twig', array(
            'listGroupes' => $listGroupes
        ));
    }
}