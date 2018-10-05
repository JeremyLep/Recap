<?php

namespace GroupeBundle\Repository;

use Doctrine\ORM\EntityRepository;

class InviteRepository extends EntityRepository
{
	public function countInviteActive($email)
	{
		$status = 'En attente';

		$query = 'SELECT COUNT(id) 
				  FROM invite
				  WHERE email = :email
				  AND active = :status';

		$em = $this->getEntityManager();
	    $stmt = $em->getConnection()->prepare($query);
	    $stmt->bindParam(':email', $email);
	    $stmt->bindParam(':status', $status);
	    $stmt->execute();
	    
	    return $stmt->fetchColumn();
	}
}