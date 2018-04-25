<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class RessourceRepository extends EntityRepository
{
	public function countMesRessources($user)
	{
		$query = 'SELECT count(id)
				  FROM ressource
				  WHERE auteur_id = :user';

		$em   = $this->getEntityManager();
	    $stmt = $em->getConnection()->prepare($query);
	    $stmt->bindParam(':user', $user);
	    $stmt->execute();
	    
	    return $stmt->fetchColumn();
	}
}