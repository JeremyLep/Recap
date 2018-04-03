<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use AppBundle\Entity\Fiche;
use AppBundle\Entity\Membre;
use UserBundle\Entity\User;


class GroupeRepository extends EntityRepository
{
	public function getGroupeMembre($user, $offset, $limit)
	{
		$limit = (int) $limit;
		$offset = (int) $offset;

		$em = $this->getEntityManager();
		$query = 'SELECT g.id, g.titre, g.avatar, g.color
				  FROM groupe AS g
				  JOIN membre AS m
				  ON g.id = m.groupe_id
				  WHERE m.user_id = :user
				  GROUP BY g.id
				  ORDER BY g.date_creation
				  LIMIT :offset, :limit
				 ';

	    $stmt = $em->getConnection()->prepare($query);
	    $stmt->bindParam(':user', $user);
	    $stmt->bindParam(':offset', $offset, \PDO::PARAM_INT);
	    $stmt->bindParam(':limit', $limit, \PDO::PARAM_INT);
	    $stmt->execute();

	    $groupes = $stmt->fetchAll();
	    
	    if (empty($groupes)) {
	    	return;
	    }

	    foreach ($groupes as $groupe) {
	    	$query = $em->createQueryBuilder();
	    	$query->select('f')
	    		  ->from('AppBundle\Entity\Fiche', 'f')
	    		  ->leftJoin('AppBundle\Entity\Membre', 'm', 'WITH', 'm.groupe = f.groupe')
	    		  ->leftJoin('UserBundle\Entity\User', 'u', 'WITH', 'm.user = u.id')
	    		  ->where('f.groupe = ?1')
	    		  ->orderBy('f.dateCreation', 'DESC')
	    		  ->groupBy('f')
	    		  ->setParameter(1, $groupe['id'])
	    		  ->setMaxResults(2);

	    	$groupe['fiche'] = $query->getQuery()->getResult();
	    	$groupeList[] = $groupe;
	    }
	    
	    return $groupeList;
	}
	
	public function countFicheAccess($user)
	{
		$em = $this->getEntityManager();

		$query = 'SELECT f.id
				  FROM fiche AS f
				  JOIN groupe AS g
				  ON f.groupe_id = g.id
				  JOIN membre AS m
				  ON m.groupe_id = f.groupe_id
				  WHERE m.user_id = :user
				  GROUP BY f.id';

	    $stmt = $em->getConnection()->prepare($query);
	    $stmt->bindParam(':user', $user);
	    $stmt->execute();

	    $nbFiche = $stmt->fetchAll();
	    
	    return count($nbFiche);
	}

	public function getGroupe($groupeId)
	{
		$em = $this->getEntityManager();

		$query = 'SELECT g.id, g.user_id AS userId, g.titre, g.nb_fiche AS nbFiche, g.nb_membre AS nbMembre, g.date_creation AS dateCreation, g.avatar, g.color
				  FROM groupe AS g
				  WHERE g.id = :groupeId
				  GROUP BY g.id';

	    $stmt = $em->getConnection()->prepare($query);
	    $stmt->bindParam(':groupeId', $groupeId);
	    $stmt->execute();

	    $groupe = $stmt->fetch();

	    return $groupe;
	}

	public function getUserGroupe($user)
	{
		$em = $this->getEntityManager();

		$query = 'SELECT g.*
				  FROM groupe AS g
				  JOIN membre AS m
				  ON m.groupe_id = g.id
				  WHERE m.user_id = :user
				  GROUP BY g.id';

	    $stmt = $em->getConnection()->prepare($query);
	    $stmt->bindParam(':user', $user);
	    $stmt->execute();

	    $groupes = $stmt->fetchAll();
		
	    return $groupes;
	}
}