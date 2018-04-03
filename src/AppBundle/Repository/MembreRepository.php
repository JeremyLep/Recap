<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class MembreRepository extends EntityRepository
{
	public function countMembreFiche($user)
	{
		$query = 'SELECT count(id)
				  FROM fiche AS f
				  JOIN membre AS m
				  ON g.id = m.groupe_id
				  WHERE m.user_id = :user
				  GROUP BY g.id
				  ORDER BY g.date_creation';

		$em = $this->getEntityManager();
	    $stmt = $em->getConnection()->prepare($query);
	    $stmt->bindParam(':user', $user);
	    $stmt->execute();

	    return $stmt->fetchAll();
	}
}