<?php

namespace AppBundle\Controller;

use App\AppBundle\Entity\Fiche;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class SearchController extends Controller
{
    public function searchBarAction()
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm('AppBundle\Form\SearchType');

        return $this->render('AppBundle:Search:searchbar.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $securityContext = $this->get('security.authorization_checker');
        
        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException();
        }

        $search = strip_tags($request->query->get('search'));
        
        if (!empty($search)) {
            $res = $em
                ->getRepository('AppBundle:Fiche')
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
