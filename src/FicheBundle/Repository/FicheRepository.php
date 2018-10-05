<?php

namespace FicheBundle\Repository;

use Doctrine\ORM\EntityRepository;

class FicheRepository extends EntityRepository
{
	public function getFichesByGroupe($groupeId, $limit, $offset)
	{
		// Map tags to fiche to avoid lazyloading
		$query = $this->getEntityManager()->createQuery('
			SELECT f
			FROM FicheBundle\Entity\Fiche f
			JOIN GroupeBundle\Entity\Groupe g WITH g.id = f.groupe
			LEFT JOIN FicheBundle\Entity\Note n WITH n.fiche = f.id
			WHERE g.id = :groupeId')
		->setFirstResult($offset)
     	->setMaxResults($limit)
     	->setParameter('groupeId', $groupeId);

     	return $query->getResult();
	}

	public function getFiche($ficheId)
	{
		// Map tags to fiche
		$query = $this->getEntityManager()->createQuery('
			SELECT f
			FROM FicheBundle\Entity\Fiche f
			JOIN GroupeBundle\Entity\Groupe g WITH g.id = f.groupe
			LEFT JOIN FicheBundle\Entity\Ressource r WITH r.fiche = f.id
			LEFT JOIN FicheBundle\Entity\Commentaire c WITH c.fiche = f.id
			LEFT JOIN FicheBundle\Entity\Note n WITH n.fiche = f.id
			WHERE f.id = :ficheId')
     	->setParameter('ficheId', $ficheId);

     	return $query->getSingleResult();
	}

	public function getMesFiches($userId, $limit, $offset)
	{
		// Map tags to fiche
		$query = $this->getEntityManager()->createQuery('
			SELECT f
			FROM GroupeBundle\Entity\Membre m
			JOIN FicheBundle\Entity\Fiche f WITH f.auteur = m.id
			LEFT JOIN GroupeBundle\Entity\Groupe g WITH g.id = f.groupe
			LEFT JOIN FicheBundle\Entity\Note n WITH n.fiche = f.id
			WHERE m.id = :userId
			GROUP BY f.id')
		->setFirstResult($offset)
     	->setMaxResults($limit)
     	->setParameter('userId', $userId);

     	return $query->getResult();
	}

	public function countMesFiches($user)
	{
		$query = 'SELECT COUNT(f.id)
				FROM membre m
				LEFT JOIN fiche f
					ON f.auteur_id = m.id
				WHERE m.id = :user';

		$em = $this->getEntityManager();
	    $stmt = $em->getConnection()->prepare($query);
	    $stmt->bindParam(':user', $user);
	    $stmt->execute();
	    
	    return $stmt->fetchColumn();
	}

	public function getSearch($search, $userId)
	{
		$search = str_replace(' ', '* +', $search);
		$search = "+*".$search."*";
     	$stmt = $this
     		->getEntityManager()
			->getConnection()
			->prepare('
				SELECT f.id, f.groupe_id, g.titre as groupe, f.titre, f.theme, f.description, u.avatar,
				MATCH(f.titre) AGAINST(:term) AS revelTitre,
				MATCH(f.theme) AGAINST(:term) AS revelTheme,
				MATCH(f.description) AGAINST(:term) AS revelDescr
				FROM fiche AS f 
				JOIN user as u on u.id = f.auteur_id
				JOIN groupe AS g ON f.groupe_id = g.id
				JOIN membre AS m ON m.groupe_id = g.id AND m.user_id = :user
				JOIN fiche_tag AS ft ON ft.fiche_id = f.id
				JOIN tag AS t ON t.id = ft.tag_id 
				WHERE 
				MATCH(f.titre) AGAINST(:term)
				OR MATCH(f.theme) AGAINST(:term)
				OR MATCH(f.description) AGAINST(:term)
				OR MATCH(t.label) AGAINST(:term)
				GROUP BY f.id
         		ORDER BY (CASE WHEN revelTheme ="0" AND revelTitre = "0" AND revelDescr = "0" THEN 1 ELSE 0 END) DESC, 
         revelTitre, revelDescr, revelTheme DESC
         		LIMIT 20
			');
		$stmt->bindParam(':term', $search);
		$stmt->bindParam(':user', $userId);
		$stmt->execute();

		return $stmt->fetchAll();
	}
}