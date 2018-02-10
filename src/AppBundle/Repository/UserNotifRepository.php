<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class UserNotifRepository extends EntityRepository
{
	public function countNotif($user)
	{
		$query = $this
			->createQueryBuilder('n')
			->select('COUNT(n)')
			->where('n.user = :user')
			->andWhere('n.active = true')
			->setParameters(array(
				'user' => $user,
			))
			->getQuery();

		return $query->getSingleScalarResult();
	}
}