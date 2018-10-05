<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use HomeBundle\Form\ContactType;

class HomeController extends Controller
{
    public function indexAction(Request $request)
    {
        if ($this->getUser() === null) {
        	$form = $this->createForm(ContactType::class);
	        $form->handleRequest($request);

	        if ($form->isSubmitted() && $form->isValid()) {

	        	$email = 'jeremy.leprince1@gmail.com';

	        	$this->get('app.send_mail')->sendMail(
	        		'AppBundle:Email:contact.html.twig',
	        		array(
		            	'auteur'  => $form->get('nom')->getData(),
		                'message' => $form->get('message')->getData(),
		                'email'	  => $form->get('email')->getData(),
		                'tel'	  => $form->get('tel')->getData(),
		            ),
		            'Recap - Contact',
		            $email
	        	);
	        }

            return $this->render('HomeBundle:Home:index.html.twig', array(
	            'form' => $form->createView(),
            ));
        } else {
            return $this->forward('AppBundle:Default:index');
        }
    }
}