<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;
use \DateTime;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NotificationRepository")
 */
class Notification
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     * @Assert\DateTime()
     */
    private $date;

    /**
     * @var Integer
     *
     * @ORM\Column(name="nb_ressource", type="integer", nullable=false)
     * @Assert\NotBlank()
     */
    private $nbRessource;

    /**
     * @var \Fiche
     *
     * @ORM\ManyToOne(targetEntity="Fiche", inversedBy="notification", cascade="remove")
     */
    private $fiche;

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="notificationAuteur", cascade={"persist"})
     */
    private $auteur;

    /**
     * @var Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\UserNotif", mappedBy="notification")
     */
    protected $notifBridge;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->notifBridge = new Collections\ArrayCollection();
        $this->date        = new DateTime();
        $this->nbRessource = 0;
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
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
     * Set fiche
     *
     * @param \AppBundle\Entity\Fiche $fiche
     *
     * @return Notification
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

    /**
     * set nbRessource
     *
     * @param Integer $nbRessource
     *
     * @return Integer
     */
    public function setNbRessource($nbRessource)
    {
        $this->nbRessource = $nbRessource;

        return $this;
    }

    /**
     * Get nbRessource
     *
     * @return Integer
     */
    public function getNbRessource()
    {
        return $this->nbRessource;
    }

    /**
     * set notifBridge
     *
     * @param \AppBundle\Entity\Notification
     *
     * @return Collections\Collection
     */
    public function addNotifBridge(\AppBundle\Entity\Notification $notifBridge)
    {
    	$this->notifBridge[] = $notifBridge;

    	return $this;
    }

    /**
     * getNotifBridge
     *
     * @return Collections\Collection
     */
    public function getNotifBridge()
    {
   		return $this->notifBridge;
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
     * set Auteur
     *
     * @param \UserBundle\Entity\User $auteur
     *
     * @return \User
     */
    public function setAuteur(\UserBundle\Entity\User $auteur)
    {
        $this->auteur = $auteur;
        
        return $this;
    }
}