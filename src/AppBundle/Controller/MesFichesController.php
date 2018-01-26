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

class MesFichesController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fiches = $em
          ->getRepository('AppBundle:Fiche')
          ->findBy(array('auteur' => $this->getUser()));
        $nbFiche = count($fiches);

        return $this->render('AppBundle:MesFiches:index.html.twig', array(
            'fiches'  => $fiches,
            'nbFiche' => $nbFiche
        ));
    }
}