<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Table(name="compte")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompteRepository")
 */
class Compte
{
  /**
   * @ORM\Column(name="compte_id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $compte_id;

  /**
   * @ORM\Column(name="nom", type="string", length=255)
   */
  private $nom;

  /**
   * @ORM\Column(name="prenom", type="string", length=255)
   */
  private $prenom;

  /**
   * @ORM\Column(name="email", type="string", length=255)
   */
  private $email;

  /**
   * @ORM\Column(name="password", type="string", length=255)
   */
  private $password;

  /**
   * @ORM\Column(name="date_inscription", type="Datetime")
   */
  private $date_inscription;



  public function __construct()
  {
    $this->date_inscription = new \Date();
  }


  public function getCompteId()
  {
    return $this->compte_id;
  }

  public function setNom($nom)
  {
    $this->nom = $nom;
  }

  public function getNom()
  {
    return $this->nom;
  }

  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;
  }

  public function getPrenom()
  {
    return $this->prenom;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setDateInscription(\Datetime $date_inscription)
  {
    $this->date_inscription = $date_inscription;
  }

  public function getDateInscription()
  {
    return $this->date_inscription;
  }
}