<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class TagRepository extends EntityRepository
{
	public function getTags($id_fiche)
	{

		$query = $this->createQueryBuilder('tag')
			->where('tag.fiche = :idF')
            ->setParameter('idF', $id_fiche);
			return $query
	    	->getQuery()
	    	->getResult();
	}
}