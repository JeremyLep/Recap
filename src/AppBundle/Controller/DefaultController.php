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
        $listGroupes = $this->getUser()->getGroupe();

        $em    = $this->getDoctrine()->getManager();
        $nbFiche = $em
            ->getRepository('AppBundle:Fiche')
            ->countMesFiches($this->getUser());

        return $this->render('AppBundle::menuleft.html.twig', array(
            'listGroupes' => $listGroupes,
            'nbFiche'     => $nbFiche,
        ));
    }

    public function indexAction()
    {
        $user        = $this->getUser();
        $listGroupes = $user->getGroupe();
      
        return $this->render('AppBundle:Default:index.html.twig', array(
            'listGroupes' => $listGroupes,
        ));
    }
}
