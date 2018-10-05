<?php

namespace FicheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FicheBundle\Entity\Favoris;

class FavorisController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nbFavoris = $em
            ->getRepository('FicheBundle:Favoris')
            ->countFavoris($this->getUser()->getId());

        $fiches = $em
            ->getRepository('FicheBundle:Favoris')
            ->getFavorisFiche($this->getUser()->getId(), 4, 0);

        return $this->render('FicheBundle:Favoris:index.html.twig', array(
            'fiches'    => $fiches,
            'nbFavoris' => $nbFavoris
        ));
    }

    public function ajaxAddAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $favoris = $em
            ->getRepository('FicheBundle:Favoris')
            ->findOneBy(array(
                'fiche' => $request->get('fiche')
            ));

        $fiche = $em
            ->getRepository('FicheBundle:Fiche')
            ->find($request->get('fiche'));

        return $this->get('fiche_bundle.manager.favoris')
            ->manageFavoris($fiche, $favoris);
    }

    public function favorisInfiniteScrollAction(Request $request, $offset)
    {
        $limit  = $request->request->get('limit');
        $fiches = $this->getDoctrine()->getManager()
          ->getRepository('FicheBundle:Favoris')
          ->getFavorisFiche($this->getUser(), $limit, $offset);

        return $this->render('FicheBundle:Fiche:template.html.twig', array(
            'fiches' => $fiches
        ));
    }
}