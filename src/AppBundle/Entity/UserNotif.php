<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;
use UserBundle\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User_Notif
 *
 * @ORM\Table(name="user_notif")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserNotifRepository")
 */
class UserNotif
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
     * @var Boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     * @Assert\Choice({false, true})
     * @Assert\NotBlank()
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     * @Assert\DateTime()
     * @Assert\NotBlank()
     */
    private $date;

    /**
     * @var UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="userBridge", cascade="persist")
     */
    protected $user;

    /**
     * @var \Notification
     *  
     * @ORM\ManyToOne(targetEntity="Notification", inversedBy="notifBridge", cascade="persist")
     */
    protected $notification;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->active = true;
        $this->date   = new \DateTime();
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
    public function setUser(\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
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
     * Set notification
     *
     * @param \AppBundle\Entity\Notification $notification
     *
     * @return UserNotif
     */
    public function setNotification(\AppBundle\Entity\Notification $notification)
    {
        $this->notification = $notification;

        return $this;
    }


    /**
     * Get notification
     *
     * @return string
     */
    public function getNotification()
    {
        return $this->notification;
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
     * isActive
     *
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * Set active
     *
     * @param boolean
     *
     * @return boolean
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
}
