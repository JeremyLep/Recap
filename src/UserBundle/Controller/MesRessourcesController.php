<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MesRessourcesController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ressources = $em
            ->getRepository('FicheBundle:Ressource')
            ->findBy(array('auteur' => $this->getUser()), null, 8, 0);

        $nbRessource = $em
            ->getRepository('FicheBundle:Ressource')
            ->countMesRessources($this->getUser()->getId());
        
        return $this->render('UserBundle:MesRessources:index.html.twig', array(
            'ressources'  => $ressources,
            'nbRessource' => $nbRessource
        ));
    }

    public function mesRessourcesInfiniteScrollAction(Request $request, $offset)
    {
        $limit      = $request->request->get('limit');
        $ressources = $this->getDoctrine()->getManager()
          ->getRepository('FicheBundle:Ressource')
          ->findBy(array('auteur' => $this->getUser()), null, $limit, $offset);

        return $this->render('UserBundle:MesRessources:template.html.twig', array(
            'ressources' => $ressources
        ));
    }
}