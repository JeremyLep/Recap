<?php

namespace GroupeBundle\Repository;

use Doctrine\ORM\EntityRepository;

class GroupeRepository extends EntityRepository
{
	// Requete vraiment dégueulasse
	public function getGroupeMembre($user, $offset, $limit)
	{
		$limit = (int) $limit;
		$offset = (int) $offset;

		$em = $this->getEntityManager();
		$query = 'SELECT g.id, g.titre, g.avatar, g.color, g.user_id AS user
				  FROM groupe AS g
				  JOIN membre AS m
				  ON g.id = m.groupe_id
				  WHERE m.user_id = :user
				  GROUP BY g.id
				  ORDER BY g.date_creation
				  LIMIT :offset, :limit';

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
	    		  ->from('FicheBundle\Entity\Fiche', 'f')
	    		  ->leftJoin('GroupeBundle\Entity\Membre', 'm', 'WITH', 'm.groupe = f.groupe')
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

	public function getGroupeMembres($groupeId)
	{
		$query = $this->getEntityManager()->createQuery('
			SELECT g
			FROM GroupeBundle\Entity\Groupe g
			JOIN GroupeBundle\Entity\Membre m WITH m.groupe = g.id
			WHERE g.id = :groupeId')
		->setParameter('groupeId', $groupeId);

		return $query->getSingleResult();
	}

	public function countFicheAccess($user)
	{
		$em = $this->getEntityManager();

		$query = 'SELECT COUNT(f.id)
				  FROM fiche AS f
				  JOIN groupe AS g ON f.groupe_id = g.id
				  JOIN membre AS m ON m.groupe_id = f.groupe_id
				  WHERE m.user_id = :user
				  GROUP BY f.id';

	    $stmt = $em->getConnection()->prepare($query);
	    $stmt->bindParam(':user', $user);
	    $stmt->execute();

	    return $stmt->fetchColumn();
	}

	public function getGroupe($groupeId)
	{
		$query = $this->getEntityManager()->createQuery(
			'SELECT g
			FROM GroupeBundle\Entity\Groupe g
			WHERE g.id = :groupeId
			GROUP BY g.id'
		)->setParameter('groupeId', $groupeId);

		return $query->getSingleResult();
	}

	public function getUserGroupe($user)
	{
		$em = $this->getEntityManager();

		$query = $this->getEntityManager()->createQuery('
			SELECT g
			FROM GroupeBundle\Entity\Groupe g
			JOIN GroupeBundle\Entity\Membre m WITH m.groupe = g.id
			WHERE m.user = :user
			GROUP BY g.id')
		->setParameter('user', $user);

		return $query->getResult();
	}
}