<?php

namespace UserBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use UserBundle\Entity\User;

class UserRepository extends EntityRepository
{
	public function getInfoMenu($user)
	{
		$query = 'SELECT 
					( SELECT count(f.id)
					FROM membre m
					LEFT JOIN fiche f ON f.auteur_id = m.id
					WHERE m.id = %d
					) AS count_fiche,
					
					( SELECT count(fav.id)
					FROM favoris fav
					WHERE fav.user_id = %d
					) AS count_favoris,

					( SELECT count(r.id) as count
					FROM ressource r
					WHERE r.auteur_id = %d
					) AS count_ressource,

					( SELECT count(i.id) as count
					FROM invite i
					WHERE email = %s
					  AND active = "En attente"
					) AS count_invite
				';

		$cnx   = $this->getEntityManager()->getConnection();
		$query = sprintf($query, $user->getId(), $user->getId(), $user->getId(), $cnx->quote($user->getEmail()));

	    $stmt  = $cnx->prepare($query);
	    
	    $stmt->execute();
	    
	    return $stmt->fetch();
	}
}