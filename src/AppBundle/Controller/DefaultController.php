<?php

namespace AppBundle\Controller;

use App\AppBundle\Entity\Fiche;
use App\AppBundle\Entity\Groupe;
use App\AppBundle\Entity\Membre;
use App\AppBundle\Entity\Ressource;
use App\AppBundle\Entity\Tag;
use App\AppBundle\Entity\Commentaire;
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
            ->getGroupeMembre($this->getUser());

        $nbFiche = $em
            ->getRepository('AppBundle:Fiche')
            ->countMesFiches($this->getUser());

        $nbFavoris = $em
            ->getRepository('AppBundle:Favoris')
            ->countFavoris($this->getUser());

        return $this->render('AppBundle:Menu:listGroupe.html.twig', array(
            'listGroupes' => $listGroupes,
            'nbFiche'     => $nbFiche,
            'nbFavoris'   => $nbFavoris,
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

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $listGroupes = $em
            ->getRepository('AppBundle:Groupe')
            ->getGroupeMembre($this->getUser());

        $nbFicheAccess = 0;
        foreach ($listGroupes as $groupe) {
            $nbFicheAccess += count($groupe->getFiche());   
        }

        $nbInvite = $em
            ->getRepository('AppBundle:Invite')
            ->countInviteActive($this->getUser());
            
        return $this->render('AppBundle:Default:index.html.twig', array(
            'listGroupes' => $listGroupes,
            'nbFicheAccess' => $nbFicheAccess
        ));
    }
}
