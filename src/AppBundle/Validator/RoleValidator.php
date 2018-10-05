<?php

namespace AppBundle\Validator;

use GroupeBundle\Entity\Membre;
use FicheBundle\Entity\Fiche;
use UserBundle\Entity\User;
use GroupeBundle\Entity\Groupe;

class RoleValidator
{
	public function roleUser($membre)
	{
		if ($membre === null || !$membre->hasRole('ROLE_USER')) {
        	return true;
        }

        return false;
	}

	public function roleRessource($membre, Fiche $fiche)
	{
		if ($membre === null || ($fiche->getAuteur()->getUser() !== $membre->getUser() && !$membre->hasRole('ROLE_RESSOURCE') )) {
        	return true;
        }

        return false;
	}

	public function deleteRessource($membre, Fiche $fiche)
	{
		if ($membre === null || !$membre->hasRole('ROLE_ADMIN') && !$membre->hasRole('ROLE_RESSOURCE') || ($membre->hasRole('ROLE_RESSOURCE') && $fiche->getAuteur()->getUser() !== $membre->getUser() )) {
          return true;
        }

        return false;
	}

	public function rolePost($membre)
	{
		if ($membre === null || !$membre->hasRole('ROLE_POST')) {
          return true;
        }

        return false;
	}

	public function roleEdit($membre, Fiche $fiche)
	{
		if ($membre === null || ($fiche->getAuteur()->getId() !== $membre->getId() && !$membre->hasRole('ROLE_EDIT'))) {
        	return true; 
        }

        return false;
	}

	public function maxGroupe(User $user, $maxGroupe)
	{
		if (!$user->isPremium() && count($user->getGroupe()) > $maxGroupe) {
            return true;
        }

        return false;
	}

	public function author(User $user, Groupe $groupe)
	{
		if ($groupe->getUser() !== $user) {
			return true;
		}
		
		return false;
	}
}