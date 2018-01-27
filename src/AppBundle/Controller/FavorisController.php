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
        
        $favoris = $em
          ->getRepository('AppBundle:Favoris')
          ->findBy(array('user' => $this->getUser()));

        $i=0;
        foreach ($favoris as $favori) {
            $fiches[$i++] = $favori->getFiche();
        }

        $nbFiche = count($fiches);

        return $this->render('AppBundle:MesFiches:index.html.twig', array(
            'fiches'  => $fiches,
            'nbFiche' => $nbFiche
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

               // var_dump($favoris);die;
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
}