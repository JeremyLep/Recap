<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class UserNotifRepository extends EntityRepository
{
	public function countNotif($user)
	{	
		$query = 'SELECT count(id) 
				  FROM user_notif
				  WHERE user_id = :user
				  AND active = 1';

		$em = $this->getEntityManager();
	    $stmt = $em->getConnection()->prepare($query);
	    $stmt->bindParam(':user', $user);
	    $stmt->execute();

	    return $stmt->fetchColumn();
	}
}