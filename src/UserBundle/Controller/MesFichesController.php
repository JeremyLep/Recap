<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MesFichesController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fiches = $em
          ->getRepository('FicheBundle:Fiche')
          ->getMesFiches($this->getUser()->getId(), 4, 0);

        $nbFiche = $em
          ->getRepository('FicheBundle:Fiche')
          ->countMesFiches($this->getUser()->getId());

        return $this->render('UserBundle:MesFiches:index.html.twig', array(
            'fiches'  => $fiches,
            'nbFiche' => $nbFiche
        ));
    }

    public function mesFichesInfiniteScrollAction(Request $request, $offset)
    {
        $limit  = $request->request->get('limit');
        $fiches = $this->getDoctrine()->getManager()
          ->getRepository('FicheBundle:Fiche')
          ->getMesFiches($this->getUser()->getId(), $limit, $offset);
        
        return $this->render('FicheBundle:Fiche:template.html.twig', array(
            'fiches' => $fiches
        ));
    }
}