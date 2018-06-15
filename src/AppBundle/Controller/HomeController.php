<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use AppBundle\Form\ContactType;

class HomeController extends Controller
{
    public function indexAction(Request $request)
    {
        if ($this->getUser() === null) {
        	$form = $this->createForm(ContactType::class);
	        $form->handleRequest($request);

	        if ($form->isSubmitted() && $form->isValid()) {

	        	$email = 'jeremy.leprince1@gmail.com';

	        	$message = (new \Swift_Message('Récap - Contact'))
		          ->setFrom('noreply@recap.com')
		          ->setTo($email)
		          ->setBody(
		              $this->renderView(
		                  'AppBundle:Email:contact.html.twig',
		                  array(
		                  	'auteur'  => $form->get('nom')->getData(),
		                  	'message' => $form->get('message')->getData(),
		                  	'email'	  => $form->get('email')->getData(),
		                  	'tel'	  => $form->get('tel')->getData(),
		                  )
		              ),
		              'text/html'
		          );

		        //$this->get('mailer')->send($message);
	        }

            return $this->render('AppBundle:Home:index.html.twig', array(
	            'form' => $form->createView(),
            ));
        } else {
            return $this->forward('AppBundle:Default:index');
        }
    }
}