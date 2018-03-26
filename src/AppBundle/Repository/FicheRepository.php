<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

class FicheRepository extends EntityRepository
{
	public function getFiches()
	{
		$query = $this->createQueryBuilder('f')
	    	->innerJoin('f.groupe', 'c')
    		->addSelect('c');

	    return $query
	    	->getQuery()
	    	->getResult();
	}

	public function getOneFiche($id_fiche, $id_groupe)
	{
		$query = $this
			->createQueryBuilder('fiche')
			->where("fiche.id = :idF")
            ->setParameter('idF', $id_fiche)
            ->andWhere('fiche.groupe = :idG')
            ->setParameter('idG', $id_groupe);
			
		return $query->getQuery()->getResult();
	}

	

	public function getAllFicheByGroupe($groupe)
	{
		$query = $this
			->createQueryBuilder('f')
	    	->orderBy('f.dateCreation', 'DESC')
	    	->leftJoin('f.groupe', 'g')
        	->addSelect('g')
        	->where('g.id = :groupe')
        	->setParameters(array(
            	'groupe' => $groupe,
        	))
        	->getQuery();

    	return $query->getResult();
	}

	public function getFicheCommentaire()
	{
		$query = $this
			->createQueryBuilder('a')
	    	->orderBy('a.dateCreation', 'DESC')
	    	->getQuery();

    	return new Paginator($query, true);
	}

	public function countMesFiches($user)
	{
		$query = $this
			->createQueryBuilder('a')
			->select('COUNT(a)')
			->where('a.auteur = :user')
			->setParameters(array(
				'user' => $user,
			))
			->getQuery();

		return $query->getSingleScalarResult();
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