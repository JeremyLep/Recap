<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class NotificationRepository extends EntityRepository
{
	public function getNotifByGroup($groupeId)
	{
		$query = 'SELECT n.id, n.date, n.nb_ressource AS nbRessource, f.titre AS ficheTitre, g.titre AS groupeTitre, u.username, u.avatar, u.color
				  FROM notification AS n
				  JOIN fiche AS f
				  ON f.id = n.fiche_id
				  JOIN groupe AS g
				  ON f.groupe_id = g.id
				  JOIN user AS u
				  ON u.id = n.auteur_id
				  WHERE g.id = :groupeId
				  ORDER BY n.date';

		$em = $this->getEntityManager();
	    $stmt = $em->getConnection()->prepare($query);
	    $stmt->bindParam(':groupeId', $groupeId);
	    $stmt->execute();

	    return $stmt->fetchAll();
	}
}