<?php

namespace GroupeBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use GroupeBundle\Entity\Groupe;
use GroupeBundle\Entity\Membre;
use AppBundle\Uploader\Uploader;

class GroupeManager
{
	protected $entityManager;
	protected $tokenStorage;

	public function __construct(EntityManagerInterface $entityManager, TokenStorage $tokenStorage)
	{
		$this->entityManager = $entityManager;
		$this->tokenStorage  = $tokenStorage;
	}

	public function buildGroupe(FormInterface $form, Uploader $uploader, String $avatarDir)
	{
		$groupe = new Groupe();

		if ($form->get('avatar')->getData() !== null) {
			$fileName = $uploader->upload(
				$avatarDir, 
				$form->get('avatar')->getData()
			);

			$groupe->setAvatar($fileName);
		}

		$groupe->setTitre($form->get('titre')->getData());
		$groupe->setUser($this->tokenStorage->getToken()->getUser());

		$membre = new Membre();

		$membre->setUser($this->tokenStorage->getToken()->getUser());
		$membre->setAdmin();
		$membre->setGroupe($groupe);

        $this->entityManager->persist($groupe);
        $this->entityManager->persist($membre);
        $this->entityManager->flush();

        return $groupe;
	}
}