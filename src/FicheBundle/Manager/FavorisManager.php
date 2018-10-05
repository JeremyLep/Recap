<?php

namespace FicheBundle\Manager;

use FicheBundle\Entity\Favoris;
use FicheBundle\Entity\Fiche;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class FavorisManager 
{
    protected $entityManager;
    protected $tokenStorage;

    public function __construct(EntityManagerInterface $entityManager, TokenStorage $tokenStorage)
    {
        $this->entityManager = $entityManager;
        $this->tokenStorage  = $tokenStorage;
    }

    public function manageFavoris(Fiche $fiche, $favoris)
    {
        if ($favoris instanceof Favoris) {
            $this->entityManager->remove($favoris);
            $this->entityManager->flush();

            return new JsonResponse(array(
                'delete' => true
            ));
        } else {
            $favoris = new Favoris();
            $favoris->setUser($this->tokenStorage->getToken()->getUser());
            $favoris->setFiche($fiche);

            $this->entityManager->persist($favoris);
            $this->entityManager->flush();

            return new JsonResponse(array(
                'add' => true
            ));
        }        
    }
}
