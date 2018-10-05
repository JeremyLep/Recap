<?php

namespace FicheBundle\EventListener;

use AppBundle\Entity\Notification;
use AppBundle\Entity\UserNotif;
use FicheBundle\Entity\Fiche;
use UserBundle\Entity\User;
use FicheBundle\EventListener\FicheEvent;
use Doctrine\ORM\EntityManagerInterface;

class FicheListener
{
	protected $entityManager;
	protected $twig;
	protected $mailer;

	public function __construct(EntityManagerInterface $entityManager, \Twig_Environment $twig, \Swift_Mailer $mailer) {
		$this->entityManager = $entityManager;
		$this->twig   		 = $twig;
		$this->mailer 		 = $mailer;
	}
    
    public function onFicheCreatedNotif(FicheEvent $event)
    {
    	$fiche = $event->getFiche();
    	$user  = $event->getUser();

    	$notification = new Notification();

    	$notification->setFiche($fiche);
        $notification->setAuteur($user);

     	if ($event->getRessource() !== null) {
        	$notification->setNbRessource($event->getRessource());
     	}

        $membres = $fiche->getGroupe()->getMembre();

        foreach ($membres as $membre) {

            if ($user !== $membre->getUser()) {
              	$userNotif = new UserNotif();
              
              	$userNotif->setNotification($notification);
              	$userNotif->setUser($membre->getUser());

            	$this->entityManager->persist($userNotif);
            }
        }
        $this->entityManager->persist($notification);
        $this->entityManager->flush();
    }

    public function onFicheCreatedMail(FicheEvent $event)
    {
    	$body 	 = $this->renderMailTemplate($event->getFiche());
    	$message = \Swift_Message::newInstance()
    		->setSubject('Recap - Votre fiche à bien été crée')
    		->setContentType("text/html")
    		->setFrom('recap@support.com')
    		->setTo($event->getUser()->getEmail())
    		->setBody($body);

    	$this->mailer->send($message);
    }

    private function renderMailTemplate(Fiche $fiche)
    {
    	return $this->twig->render(
    		'FicheBundle:Mail:fiche.html.twig',
    		array(
    			'fiche' => $fiche,
    			'user'	=> $fiche->getAuteur()->getUser(),
    			'groupe'=> $fiche->getGroupe()
    		)
    	);
    }
}