<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class FavorisRepository extends EntityRepository
{
	public function getFavoris()
	{

	}

	public function countFavoris($user)
	{
		$query = $this
			->createQueryBuilder('f')
			->select('COUNT(f)')
			->where('f.user = :user')
			->setParameters(array(
				'user' => $user,
			))
			->getQuery();

		return $query->getSingleScalarResult();
	}
}