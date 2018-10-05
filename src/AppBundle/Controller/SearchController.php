<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    public function searchBarAction()
    {
        $em   = $this->getDoctrine()->getManager();
        $form = $this->createForm('AppBundle\Form\SearchType');

        return $this->render('AppBundle:Search:searchbar.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function indexAction(Request $request)
    {
        $em     = $this->getDoctrine()->getManager();
        $search = strip_tags($request->query->get('recap')['search']);

        if (!empty($search)) {
            $res = $em
                ->getRepository('FicheBundle:Fiche')
                ->getSearch($search, $this->getUser()->getId());
                
            return $this->render('AppBundle:Search:index.html.twig', array(
                'search' => $res,
                'term'   => $search
            ));
        }
        else {
            return $this->redirectToRoute('app_home');
        }
    }
}
