<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\EntityManager;

class FavorisRepository extends EntityRepository
{
	public function getFavorisFiche($user, $limit, $offset)
	{
		$em = $this->getEntityManager();
		$query = $em->createQueryBuilder();
	    	
	    $query->select('f')
	  		->from('AppBundle\Entity\Favoris', 'fav')
	  		->join('AppBundle\Entity\Fiche', 'f', 'WITH', 'f.id = fav.fiche')
	   	    ->where('fav.user = ?1')
	   	    ->groupBy('f')
	    	->setParameter(1, $user)
	   	    ->setFirstResult($offset)
	    	->setMaxResults($limit);

	    return $query->getQuery()->getResult();
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