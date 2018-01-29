<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class GroupeRepository extends EntityRepository
{
	public function getGroupes()
	{
		$query = $this->createQueryBuilder('a')
	    ->orderBy('a.dateCreation', 'DESC')
	    ->getQuery();

    	return $query
      	->getResult();
	}

	public function getCurrGroupe($groupeId)
	{
		$query = $this->createQueryBuilder('g')
		->where('g.id = :idG')
        ->setParameter('idG', $groupeId)
	    ->orderBy('g.dateCreation', 'DESC')
	    ->getQuery();

    	return $query
      	->getResult();
	}

	public function getGroupeMembre($user)
	{
		$query = $this->createQueryBuilder('g')
		->select('g')
		->join('g.membre', 'm')
		->where('m.user = :user')
        ->setParameter('user', $user)
	    ->orderBy('g.dateCreation', 'DESC')
	    ->getQuery();

    	return $query
      	->getResult();
	}
}