<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class HomeController extends Controller
{
    public function indexAction(Request $request)
    {
        if ($this->getUser() === null) {
            return $this->render('AppBundle:Home:index.html.twig', array());
        } else {
            return $this->forward('AppBundle:Default:index');
        }
    }
}