<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ressource
 *
 * @ORM\Table(name="ressource")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RessourceRepository")
 */
class Ressource
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=75, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="route_doc", type="string", length=300, nullable=true)
     */
    private $routeDoc;

    /**
     * @var \Fiche
     *
     * @ORM\ManyToOne(targetEntity="Fiche", inversedBy="ressource")
     */
    private $fiche;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Ressource
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set routeDoc
     *
     * @param string $routedoc
     *
     * @return Ressource
     */
    public function setRouteDoc($routeDoc)
    {
        $this->routeDoc = $routeDoc;

        return $this;
    }

    /**
     * Get routeDoc
     *
     * @return string
     */
    public function getRouteDoc()
    {
        return $this->routeDoc;
    }

    /**
     * Set fiche
     *
     * @param \AppBundle\Entity\Fiche $fiche
     *
     * @return Ressource
     */
    public function setFiche(\AppBundle\Entity\Fiche $fiche = null)
    {
        $this->fiche = $fiche;

        return $this;
    }

    /**
     * Get fiche
     *
     * @return \AppBundle\Entity\Fiche
     */
    public function getFiche()
    {
        return $this->fiche;
    }
}
