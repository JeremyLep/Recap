<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;
use \DateTime;

/**
 * Membre
 *
 * @ORM\Table(name="membre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MembreRepository")
 */
class Membre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_rejoins", type="datetime", nullable=false)
     */
    protected $dateRejoins;

    /**
     * @var array 
     *
     * @ORM\Column(name="roles", type="text", nullable=false)
     */
    protected $roles;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="membre")
     */
    protected $user;

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe", inversedBy="membre")
     */
    protected $groupe;

    /**
     * @var \Commentaire
     *
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="membre")
     *
     */
    protected $commentaire;

    /**
     * @var \Fiche
     *
     * @ORM\OneToMany(targetEntity="Fiche", mappedBy="auteur")
     *
     */
    protected $fiche;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaire = new Collections\ArrayCollection();
        $this->fiche       = new Collections\ArrayCollection();
        $this->dateRejoins = new DateTime();
        $this->user        = $this->getUser();
        $this->roles       = setRoles(array('ROLE_USER'));
    }


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
     * {@inheritdoc}
     */
    public function setRoles(array $roles)
    {
        $this->roles = array();

        foreach ($roles as $role) {
            $this->addRole($role);
        }

        return $this;
    }

    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles()
    {
        $roles = $this->roles;

        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * {@inheritdoc}
     */
    public function hasRole($role)
    {
        return in_array(strtoupper($role), $this->getRoles(), true);
    }

    /**
     * {@inheritdoc}
     */
    public function addRole($role)
    {
        $role = strtoupper($role);
        if ($role === 'ROLE_USER') {
            return $this;
        }

        if (!in_array($role, $this->roles, true)) {
            $this->roles[] = $role;
        }

        return $this;
    }



    /**
     * Get dateRejoins
     *
     * @return DateTime
     */
    public function getDateRejoins()
    {
        return $this->dateRejoins;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Membre
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Get groupe
     *
     * @return AppBundle\Entity\Groupe $groupe
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set groupe
     *
     * @param \AppBundle\Entity\Groupe $groupe
     *
     * @return Groupe
     */
    public function setGroupe(\AppBundle\Entity\Groupe $groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return \AppBundle\Entity\Commentaire
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Get fiche
     *
     * @return ArrayCollection
     */
    public function getFiche()
    {
        return $this->fiche;
    }

    /**
     * Add commentaire
     *
     * @param \AppBundle\Entity\Commentaire $commentaire
     *
     * @return Membre
     */
    public function addCommentaire(\AppBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaire[] = $commentaire;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \AppBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\AppBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaire->removeElement($commentaire);
    }

    /**
     * Add fiche
     *
     * @param \AppBundle\Entity\Fiche $fiche
     *
     * @return Membre
     */
    public function addFiche(\AppBundle\Entity\Fiche $fiche)
    {
        $this->fiche[] = $fiche;

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
    }
}
