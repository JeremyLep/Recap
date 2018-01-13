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

	public function getCurrGroupe($id_groupe)
	{
		$query = $this->createQueryBuilder('g')
		->where('g.id = :idG')
        ->setParameter('idG', $id_groupe)
	    ->orderBy('g.dateCreation', 'DESC')
	    ->getQuery();

    	return $query
      	->getResult();
	}
}