<?php

namespace FicheBundle\Repository;

use Doctrine\ORM\EntityRepository;

class FavorisRepository extends EntityRepository
{
	public function getFavorisFiche($user, $limit, $offset)
	{
		$em = $this->getEntityManager();
		$query = $em->createQuery('
			SELECT f
			FROM FicheBundle\Entity\Favoris fav
			JOIN FicheBundle\Entity\Fiche f WITH f.id = fav.fiche
			WHERE fav.user = :user
			GROUP BY f')
		->setParameter('user', $user)
		->setFirstResult($offset)
		->setMaxResults($limit);

		return $query->getResult();
	}

	public function countFavoris($user)
	{
		$query = 'SELECT count(id)
				  FROM favoris
				  WHERE user_id = :user';

		$em = $this->getEntityManager();
	    $stmt = $em->getConnection()->prepare($query);
	    $stmt->bindParam(':user', $user);
	    $stmt->execute();
	    
	    return $stmt->fetchColumn();
	}
}