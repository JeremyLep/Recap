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
          ->findBy(array('auteur' => $this->getUser()), null, 4, 0);

        $nbFiche = $em
            ->getRepository('AppBundle:Fiche')
            ->countMesFiches($this->getUser()->getId());
        
        return $this->render('AppBundle:MesFiches:index.html.twig', array(
            'fiches'  => $fiches,
            'nbFiche' => $nbFiche
        ));
    }

    public function mesFichesInfiniteScrollAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $offset = $request->request->get('offset');
        $limit  = $request->request->get('limit');

        $fiches = $em
          ->getRepository('AppBundle:Fiche')
          ->findBy(array('auteur' => $this->getUser()), null, $limit, $offset);
        
        return $this->render('AppBundle:Fiche:template.html.twig', array(
            'fiches' => $fiches
        ));
    }
}