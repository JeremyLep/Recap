<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query\Expr;

class InviteRepository extends EntityRepository
{
	public function countInviteActive($email)
	{
		$status = 'En attente';

		$query = 'SELECT count(id) 
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