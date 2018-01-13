<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Table(name="membre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MembreRepository")
 */
class Membre
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="acces_lvl", type="string", length=255)
   */
  private $acces_lvl;

  /**
   * @ORM\Column(name="date_rejoins", type="datetime", length=255)
   */
  private $date_rejoins;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Compte", inversedBy="compte")
   * @ORM\JoinColumn(nullable=false)
   */
  private $compte;

  public function __construct()
  {
    $this->date_rejoins = new \Datetime();
  }


  public function getId()
  {
    return $this->id;
  }

  public function setAcces_lvl($acces_lvl)
  {
    $this->acces_lvl = $acces_lvl;
  }

  public function getAcces_lvl()
  {
    return $this->acces_lvl;
  }

  public function setDate_rejoins(\Datetime $date_rejoins)
  {
    $this->date_rejoins = $date_rejoins;
  }

  public function getDate_rejoins()
  {
    return $this->date_rejoins;
  }

  /**
     * Set compte
     *
     * @param \AppBundle\Entity\Compte $compte
     *
     * @return compte
     */
    public function setcompte(\AppBundle\Entity\Compte $compte)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get compte
     *
     * @return \AppBundle\Entity\Compte
     */
    public function getcompte()
    {
        return $this->compte;
    }

}