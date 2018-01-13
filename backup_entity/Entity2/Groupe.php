<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Table(name="groupe")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GroupeRepository")
 */
class Groupe
{
  
  /**
   * @ORM\Column(name="groupe_id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $groupe_id;

  /**
   * @ORM\Column(name="titre", type="string", length=255)
   */
  private $titre;

  /**
   * @ORM\Column(name="password_groupe", type="string")
   */
  private $password_groupe;

  /**
   * @ORM\Column(name="nb_membre", type="integer")
   */
  private $nb_membre;

  /**
   * @ORM\Column(name="date_creation", type="datetime")
   */
  private $date_creation;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Compte", inversedBy="groupe")
   * @ORM\JoinColumn(nullable=false)
   */
  private $compte;
  
  public function __construct()
  {
    $this->date_creation = new \Datetime();
  }


  public function getGroupeId()
  {
    return $this->groupe_id;
  }

  public function setTitre($titre)
  {
    $this->titre = $titre;

    return $this;
  }

  public function getTitre()
  {
    return $this->titre;
  }



  public function setPasswordGroupe($password_groupe)
  {
    $this->password_groupe = $password_groupe;

    return $this;
  }

  public function getPasswordGroupe()
  {
    return $this->password_groupe;
  }


  public function setNbMembre($nb_membre)
  {
    $this->nb_membre = $nb_membre;

    return $this;
  }

  public function getNbMembre()
  {
    return $this->nb_membre;
  }


  public function setDateCreation(\Datetime $date_creation)
  {
    $this->date_creation = $date_creation;

    return $this;
  }

  public function getDateCreation()
  {
    return $this->date_creation;
  }

    /**
     * Set compte
     *
     * @param \AppBundle\Entity\Compte $compte
     *
     * @return compte
     */
    public function setCompte(\AppBundle\Entity\Compte $compte)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return \AppBundle\Entity\Compte
     */
    public function getCompte()
    {
        return $this->compte;
    }
}
