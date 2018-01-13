<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class MembreRepository extends EntityRepository
{
	public function getMembres($id_groupe)
	{
		$query = $this->createQueryBuilder('m')
		->where('m.id = :idG')
        ->setParameter('idG', $id_groupe)
	    ->getQuery();

    	return $query
      	->getResult();
	}
}