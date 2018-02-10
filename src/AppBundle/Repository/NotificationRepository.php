<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class NotificationRepository extends EntityRepository
{
	public function getNotifByGroup($groupeId)
	{
		$query = $this
			->createQueryBuilder('n')
			->select('n')
			->join('n.fiche', 'f')
			->join('f.groupe', 'g')
			->join('g.membre', 'm')
			->join('m.user', 'u')
			->where('g.id = :groupeId')
	        ->setParameter('groupeId', $groupeId)
		    ->orderBy('n.date', 'DESC')
		    ->setFirstResult(1)
    		->setMaxResults(10);
			->getQuery();

		return $query->getResult();
	}
}