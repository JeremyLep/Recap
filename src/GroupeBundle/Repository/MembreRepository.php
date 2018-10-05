<?php

namespace GroupeBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MembreRepository extends EntityRepository
{
	public function countMembreFiche($user)
	{
		$query = 'SELECT COUNT(id)
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