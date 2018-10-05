<?php

namespace FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;
use UserBundle\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Favoris
 *
 * @ORM\Table(name="favoris")
 * @ORM\Entity(repositoryClass="FicheBundle\Repository\FavorisRepository")
 */
class Favoris
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="favoris")
     */
    protected $user;

    /**
     * @var Collections\Collection
     *
     * @ORM\ManyToOne(targetEntity="Fiche", inversedBy="favoris", cascade={"persist"})
     */
    private $fiche;

    /**
     * Constructor
     */
    public function __construct()
    {
    
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
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Favoris
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add fiche
     *
     * @param \FicheBundle\Entity\Fiche $fiche
     *
     * @return Tag
     */
    public function setFiche(\FicheBundle\Entity\Fiche $fiche)
    {
        $this->fiche = $fiche;

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

    /**
     * Get fiche
     *
     * @return Collections\Collection
     */
    public function getFiche()
    {
        return $this->fiche;
    }
}
