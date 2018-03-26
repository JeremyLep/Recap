<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;
use \DateTime;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\Column(name="titre", type="string", length=25, nullable=false)
     * @Assert\Length(min=3, max=25, minMessage="Votre titre de groupe doit contenir au moins 3 caractères", maxMessage="Votre titre de groupe ne peut contenir plus de 25 caractères")
     * @Assert\NotBlank()
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_fiche", type="integer", nullable=false)
     * @Assert\NotBlank()
     */
    private $nbFiche;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_membre", type="integer", nullable=false)
     * @Assert\NotBlank()
     */
    private $nbMembre;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     * @Assert\DateTime()
     * @Assert\NotBlank()
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", nullable=true)
     */
    protected $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=8, nullable=false)
     * @Assert\Length(min=3, max=12)
     * @Assert\NotBlank()
     */
    private $color;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="groupe");
     */
    private $user;

    /**
     * @var Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Membre", mappedBy="groupe", cascade={"persist", "remove"})
     */
    private $membre;

    /**
     * @var Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Invite", mappedBy="groupe", cascade={"remove"})
     */
    private $invite;

    /**
     * @var \Fiche
     *
     * @ORM\OneToMany(targetEntity="Fiche", mappedBy="groupe", cascade={"remove"})
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
        $this->color = "#".str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT).str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT).str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
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

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }


    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Tag
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
}
