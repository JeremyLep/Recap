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
		$query = $this->createQueryBuilder('fiche')
			->where("fiche.id = :idF")
            ->setParameter('idF', $id_fiche)
            ->andWhere('fiche.groupe = :idG')
            ->setParameter('idG', $id_groupe);
			return $query
	    	->getQuery()
	    	->getResult();
	}

	

	public function getAllFicheByGroupe($groupe)
	{
		$query = $this->createQueryBuilder('f')
	    ->orderBy('f.dateCreation', 'DESC')
	    ->leftJoin('f.groupe', 'g')
        ->addSelect('g')
        ->where('g.id = :groupe')
        ->setParameters(array(
            'groupe' => $groupe,
        ))
        ->getQuery();

	    /*$query
      	->setFirstResult(($page-1) * $nbPerPage)
      	->setMaxResults($nbPerPage);

    	return new Paginator($query, true);*/
    	return $query->getResult();

	}

	public function getFicheCommentaire()
	{
		$query = $this->createQueryBuilder('a')
	    ->orderBy('a.dateCreation', 'DESC')
	    ->getQuery();

    	return new Paginator($query, true);
	}

}