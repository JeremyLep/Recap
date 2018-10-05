<?php

namespace FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ressource
 *
 * @ORM\Table(name="ressource")
 * @ORM\Entity(repositoryClass="FicheBundle\Repository\RessourceRepository")
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
     * @ORM\Column(name="titre", type="string", length=25, nullable=false)
     * @Assert\Length(min=3, max=25, minMessage="Votre titre de ressource doit contenir au moins 3 caractères", maxMessage="Votre titre de ressource ne peut contenir plus de 25 caractères")
     * @Assert\NotBlank()
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="route_doc", type="string", length=200, nullable=false)
     * @Assert\Length(min=3, max=200)
     * @Assert\NotBlank()
     */
    private $routeDoc;

    /**
     *
     * @var float
     *
     * @ORM\Column(name="filesize", type="float", nullable=false)
     * @Assert\NotBlank()
     */
    private $filesize;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="ressource")
     */
    protected $auteur;

    /**
     * @var \Fiche
     *
     * @ORM\ManyToOne(targetEntity="FicheBundle\Entity\Fiche", inversedBy="ressource")
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
     * Set filesize
     *
     * @param float $filesize
     *
     * @return Ressource
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;

        return $this;
    }

    /**
     * Get filesize
     *
     * @return float
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Set fiche
     *
     * @param \FicheBundle\Entity\Fiche $fiche
     *
     * @return Ressource
     */
    public function setFiche(\FicheBundle\Entity\Fiche $fiche = null)
    {
        $this->fiche = $fiche;

        return $this;
    }

    /**
     * Get fiche
     *
     * @return \FicheBundle\Entity\Fiche
     */
    public function getFiche()
    {
        return $this->fiche;
    }

    /**
     * Get auteur
     *
     * @return \UserBundle\Entity\User
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set auteur
     *
     * @param \UserBundle\Entity\User $auteur
     *
     * @return Ressource
     */
    public function setAuteur(\UserBundle\Entity\User $auteur = null)
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function convertFilesize($bytes)
    {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' B';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' B';
        } else {
            $bytes = '0 B';
        }

        return $bytes;
    }
}
