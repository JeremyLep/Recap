<?php

namespace GroupeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;
use \DateTime;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Membre
 *
 * @ORM\Table(name="membre")
 * @ORM\Entity(repositoryClass="GroupeBundle\Repository\MembreRepository")
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
     * @Assert\DateTime()
     * @Assert\NotBlank()
     */
    protected $dateRejoins;

    /**
     * @var array 
     *
     * @ORM\Column(name="roles", type="array", nullable=false)
     * @Assert\NotBlank()
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
     * @ORM\OneToMany(targetEntity="FicheBundle\Entity\Commentaire", mappedBy="membre")
     *
     */
    protected $commentaire;

    /**
     * @var \Fiche
     *
     * @ORM\OneToMany(targetEntity="FicheBundle\Entity\Fiche", mappedBy="auteur")
     *
     */
    protected $fiche;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_fiche", type="integer", nullable=true)
     */
    protected $nbFiche;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaire = new Collections\ArrayCollection();
        $this->fiche       = new Collections\ArrayCollection();
        $this->dateRejoins = new DateTime();
        $this->user        = $this->getUser();
        $this->roles       = $this->setRoles(array('ROLE_USER'));
        $this->nbFiche     = 0;
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
     * Set Admin
     *
     */
    public function setAdmin() {
        $this->setRoles(array('ROLE_ADMIN', 'ROLE_EDIT', 'ROLE_INVITE', 'ROLE_POST', 'ROLE_RESSOURCES'));

        return $this;
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
     * @return array
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
     * Increm nbFiche
     *
     */
    public function incremNbFiche()
    {
        $this->nbFiche++;

        return $this;
    }

    /**
     * Get nbFiche
     *
     * @return Integer
     */
    public function getNbFiche()
    {
        return $this->nbFiche;
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
     * @return GroupeBundle\Entity\Groupe $groupe
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set groupe
     *
     * @param \GroupeBundle\Entity\Groupe $groupe
     *
     * @return Groupe
     */
    public function setGroupe(\GroupeBundle\Entity\Groupe $groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return \FicheBundle\Entity\Commentaire
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
     * @param \FicheBundle\Entity\Commentaire $commentaire
     *
     * @return Membre
     */
    public function addCommentaire(\FicheBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaire->add($commentaire);

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \FicheBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\FicheBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaire->removeElement($commentaire);
    }

    /**
     * Add fiche
     *
     * @param \FicheBundle\Entity\Fiche $fiche
     *
     * @return Membre
     */
    public function addFiche(\FicheBundle\Entity\Fiche $fiche)
    {
        $this->fiche->add($fiche);

        return $this;
    }

    /**
     * Remove fiche
     *
     * @param \FicheBundle\Entity\Fiche $fiche
     */
    public function removeFiche(\FicheBundle\Entity\Fiche $fiche)
    {
        $this->fiche->removeElement($fiche);
    }
}
