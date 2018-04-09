<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Groupe;
use AppBundle\Entity\Favoris;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class FavorisController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $securityContext = $this->get('security.authorization_checker');
        
        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException();
        }
        
        $nbFavoris = $em
            ->getRepository('AppBundle:Favoris')
            ->countFavoris($this->getUser()->getId());

        $fiches = $em
          ->getRepository('AppBundle:Favoris')
          ->getFavorisFiche($this->getUser()->getId(), 4, 0);

        return $this->render('AppBundle:Favoris:index.html.twig', array(
            'fiches'    => $fiches,
            'nbFavoris' => $nbFavoris
        ));
    }

    public function ajaxAddAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($request->isXmlHttpRequest()) {
            $favoris = $em
                ->getRepository('AppBundle:Favoris')
                ->findOneBy(array(
                    'fiche' => $request->get('fiche')
                ));

            $fiche = $em
                ->getRepository('AppBundle:Fiche')
                ->find($request->get('fiche'));

            if ($favoris === null) {
                $favoris = new Favoris();
                $favoris->setUser($this->getUser());
                $favoris->setFiche($fiche);

                $em->persist($favoris);
                $em->flush();
                
                return new JsonResponse(array(
                    'add' => true
                ));
            } else {
                $em->remove($favoris);
                $em->flush();
                
                return new JsonResponse(array(
                    'delete' => true
                ));
            }
        }
    }

    public function favorisInfiniteScrollAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $offset = $request->request->get('offset');
        $limit  = $request->request->get('limit');

        $fiches = $em
          ->getRepository('AppBundle:Favoris')
          ->getFavorisFiche($this->getUser(), $limit, $offset);
        
        return $this->render('AppBundle:Fiche:template.html.twig', array(
            'fiches' => $fiches
        ));
    }
}