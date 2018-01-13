<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class RessourceRepository extends EntityRepository
{
	public function getRessources($id_fiche)
	{

		$query = $this->createQueryBuilder('r')
		->where('r.fiche = :idF')
        ->setParameter('idF', $id_fiche)
	    ->getQuery();

    	return $query
      	->getResult();
	}
}