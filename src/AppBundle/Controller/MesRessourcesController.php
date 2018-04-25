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

class MesRessourcesController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $ressources = $em
            ->getRepository('AppBundle:Ressource')
            ->findBy(array('auteur' => $this->getUser()), null, 8, 0);

        $nbRessource = $em
            ->getRepository('AppBundle:Ressource')
            ->countMesRessources($this->getUser()->getId());
        
        return $this->render('AppBundle:MesRessources:index.html.twig', array(
            'ressources'  => $ressources,
            'nbRessource' => $nbRessource
        ));
    }

    public function mesRessourcesInfiniteScrollAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $offset = $request->request->get('offset');
        $limit  = $request->request->get('limit');

        $ressources = $em
          ->getRepository('AppBundle:Ressource')
          ->findBy(array('auteur' => $this->getUser()), null, $limit, $offset);
        
        return $this->render('AppBundle:MesRessources:template.html.twig', array(
            'ressources' => $ressources
        ));
    }
}