<?php

namespace FicheBundle\Repository;

use Doctrine\ORM\EntityRepository;

class RessourceRepository extends EntityRepository
{
	public function countMesRessources($user)
	{
		$query = 'SELECT COUNT(id)
				  FROM ressource
				  WHERE auteur_id = :user';

		$em   = $this->getEntityManager();
	    $stmt = $em->getConnection()->prepare($query);
	    $stmt->bindParam(':user', $user);
	    $stmt->execute();
	    
	    return $stmt->fetchColumn();
	}
}