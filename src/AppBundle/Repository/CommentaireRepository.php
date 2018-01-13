<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class CommentaireRepository extends EntityRepository
{
	public function getCommentaires($id_fiche)
	{

		$query = $this->createQueryBuilder('c')
			->where('c.fiche = :idF')
            ->setParameter('idF', $id_fiche);
			return $query
	    	->getQuery()
	    	->getResult();
	}
}