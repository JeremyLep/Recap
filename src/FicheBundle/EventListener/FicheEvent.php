<?php

namespace FicheBundle\EventListener;

use Symfony\Component\EventDispatcher\Event;
use FicheBundle\Entity\Fiche;
use UserBundle\Entity\User;

class FicheEvent extends Event
{
	protected $fiche;
	protected $user;
	protected $ressource;

	public function __construct(Fiche $fiche, User $user, int $ressource = null)
	{
		$this->fiche 	 = $fiche;
		$this->user  	 = $user;
		$this->ressource = $ressource;
	}

	public function getFiche()
	{
		return $this->fiche;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getRessource()
	{
		return $this->ressource;
	}
}