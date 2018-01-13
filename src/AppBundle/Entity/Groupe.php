<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;
use \DateTime;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GroupeRepository")
 */
class Groupe
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
     * @var integer
     *
     * @ORM\Column(name="nb_fiche", type="integer", nullable=true)
     */
    private $nbFiche;

    /**
     * @var string
     *
     * @ORM\Column(name="password_groupe", type="string", length=75, nullable=true)
     */
    private $passwordGroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_membre", type="integer", nullable=true)
     */
    private $nbMembre;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="groupe")
     */
    private $user;

    /**
     * @var Collections\Collection
     *
     * @ORM\oneToMany(targetEntity="Membre", mappedBy="groupe")
     */
    private $membre;

    /**
     * @var \Fiche
     *
     * @ORM\OneToMany(targetEntity="Fiche", mappedBy="groupe")
     *
     */
    private $fiche;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membre       = new Collections\ArrayCollection();
        $this->fiche        = new Collections\ArrayCollection();
        $this->dateCreation = new DateTime();
        $this->nbFiche      = 0;
        $this->nbMembre     = 1;
    }


    /**
     * Get Id
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
     * @return Groupe
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
     * Set nbFiche
     *
     * @param integer $nbFiche
     *
     * @return Groupe
     */
    public function setNbFiche($nbFiche)
    {
        $this->nbFiche = $nbFiche;

        return $this;
    }

    /**
     * Get nbFiche
     *
     * @return integer
     */
    public function getNbFiche()
    {
        return $this->nbFiche;
    }

    /**
     * Set passwordGroupe
     *
     * @param string $passwordGroupe
     *
     * @return Groupe
     */
    public function setPasswordGroupe($passwordGroupe)
    {
        $this->passwordGroupe = $passwordGroupe;

        return $this;
    }

    /**
     * Get passwordGroupe
     *
     * @return string
     */
    public function getPasswordGroupe()
    {
        return $this->passwordGroupe;
    }

    /**
     * Set nbMembre
     *
     * @param integer $nbMembre
     *
     * @return Groupe
     */
    public function setNbMembre($nbMembre)
    {
        $this->nbMembre = $nbMembre;

        return $this;
    }

    /**
     * Get nbMembre
     *
     * @return integer
     */
    public function getNbMembre()
    {
        return $this->nbMembre;
    }

    /**
     * Set dateCreation
     *
     * @param DateTime $dateCreation
     *
     * @return Groupe
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return User
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add membre
     *
     * @param \AppBundle\Entity\Membre $membre
     *
     * @return Groupe
     */
    public function addMembre(\AppBundle\Entity\Membre $membre)
    {
        $this->membre[] = $membre;
        $this->nbMembre++;

        return $this;
    }

    /**
     * Remove membre
     *
     * @param \AppBundle\Entity\Membre $membre
     */
    public function removeMembre(\AppBundle\Entity\Membre $membre)
    {
        $this->membre->removeElement($membre);
        $this->nbMembre--;
    }

    /**
     * Get membre
     *
     * @return Collections\Collection
     */
    public function getMembre()
    {
        return $this->membre;
    }

    /**
     * Get fiche
     *
     * @return Collections\Collection
     */
    public function getFiche()
    {
        return $this->fiche;
    }

    /**
     * Add fiche
     *
     * @param \AppBundle\Entity\Fiche $fiche
     *
     * @return Groupe
     */
    public function addFiche(\AppBundle\Entity\Fiche $fiche)
    {
        $this->fiche[] = $fiche;
        $this->nbFiche++;

        return $this;
    }

    /**
     * Remove fiche
     *
     * @param \AppBundle\Entity\Fiche $fiche
     */
    public function removeFiche(\AppBundle\Entity\Fiche $fiche)
    {
        $this->fiche->removeElement($fiche);
        $this->nbFiche--;
    }
}
