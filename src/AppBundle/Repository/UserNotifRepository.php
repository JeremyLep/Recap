<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserNotifRepository extends EntityRepository
{
	public function countNotif($user)
	{	
		$query = 'SELECT COUNT(id) 
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