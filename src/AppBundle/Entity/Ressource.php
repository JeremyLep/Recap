<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\Column(name="titre", type="string", length=75, nullable=false)
     * @Assert\Length(min=3, max=75, minMessage="Votre titre de ressource doit contenir au moins 3 caractères", maxMessage="Votre titre de ressource ne peut contenir plus de 75 caractères")
     * @Assert\NotBlank()
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="route_doc", type="string", length=300, nullable=false)
     * @Assert\Length(min=3, max=300)
     * @Assert\NotBlank()
     */
    private $routeDoc;

    /**
     * @var \Fiche
     *
     * @ORM\ManyToOne(targetEntity="Fiche", inversedBy="ressource")
     */
    private $fiche;

    /**
    * @var string
    *
    * @ORM\Column(name="image", type="string", length=75, nullable=true)
    */
    private $image;


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
     * Set image
     *
     * @param string $image
     *
     * @return Ressource
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
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
