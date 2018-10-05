<?php

namespace FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;
use UserBundle\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="FicheBundle\Repository\NoteRepository")
 */
class Note
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
     * @Assert\NotBlank()
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    protected $note;

    /**
     * @var FicheBundle\Entity\Fiche
     *
     * @ORM\ManyToOne(targetEntity="Fiche", inversedBy="note", cascade="persist")
     */
    protected $fiche;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    protected $userId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->date = new \DateTime();
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
     * Set note
     *
     * @param integer $note
     *
     * @return integer
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Get Fiche
     *
     * @return string
     */
    public function getFiche()
    {
        return $this->fiche;
    }

    /**
     * Set Fiche
     *
     * @param Fiche $fiche
     *
     * @return Note
     */
    public function setFiche(Fiche $fiche)
    {
        $this->fiche = $fiche;

        return $this;
    }

    /**
     * Get UserId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set UserId
     *
     * @return integer
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    	
    	return $this;
    }
}
