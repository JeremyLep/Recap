<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query\Expr;

class InviteRepository extends EntityRepository
{
	public function getUserInvite($groupeId, $email)
	{
		$query = $this->createQueryBuilder('i')
			->select('i')
			->where('i.email = :email')
			->andWhere('i.groupe = :groupeId')
            ->setParameter('groupeId', $groupeId)
            ->setParameter('email', $email);
			
		return $query
	    	->getQuery()
	    	->getResult();
	}

	public function countInviteActive($email)
	{
		$query = $this
			->createQueryBuilder('i')
			->select('COUNT(i)')
			->where('i.email = :email')
			->andWhere('i.active = :status')
			->setParameters(array(
				'email'  => $email,
				'status' => "En attente"
			))
			->getQuery();
			
		return $query->getSingleScalarResult();
	}
}