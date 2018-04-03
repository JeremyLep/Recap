<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;
use \DateTime;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Invite
 *
 * @ORM\Table(name="invite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InviteRepository")
 */
class Invite
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
     * @var email
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     * @Assert\Email(message="L'email '{{ value }}' n'est pas une adresse email valide.")
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     * @Assert\DateTime()
     * @Assert\NotBlank()
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expiration", type="datetime", nullable=false)
     * @Assert\DateTime()
     * @Assert\NotBlank()
     */
    private $dateExpiration;    

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", nullable=false)
     * @Assert\Choice(choices={"En attente", "Expiré", "Confirmé", "Refusé"})
     * @Assert\NotBlank()
     */
    private $active;

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe", inversedBy="invite")
     */
    private $groupe;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="invite")
     */
    private $auteur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->active         = "En attente";
        $this->date           = new DateTime();
        $this->dateExpiration = new DateTime();
        $this->dateExpiration->modify('+14 day');
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
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get dateExpiration
     *
     * @return \DateTime
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Invite
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set groupe
     *
     * @param \AppBundle\Entity\Groupe $groupe
     *
     * @return Invite
     */
    public function setGroupe(\AppBundle\Entity\Groupe $groupe = null)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return \AppBundle\Entity\Groupe
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set auteur
     *
     * @param \UserBundle\Entity\User $auteur
     *
     * @return Invite
     */
    public function setAuteur(\UserBundle\Entity\User $auteur)
    {
        $this->auteur = $auteur;

        return $this;
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
     * isActive
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set active
     *
     * @param string
     *
     * @return string
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
}
