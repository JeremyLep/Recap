<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

class FicheRepository extends EntityRepository
{
	public function countMesFiches($user)
	{
		$query = 'SELECT count(id)
				  FROM fiche
				  WHERE auteur_id = :user';

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