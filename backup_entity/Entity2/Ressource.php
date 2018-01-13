<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Table(name="ressource")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RessourceRepository")
 */
class Ressource
{
  /**
   * @ORM\Column(name="ressource_id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $ressource_id;

  /**
   * @ORM\Column(name="titre", type="string", length=255)
   */
  private $titre;

  /**
   * @ORM\Column(name="routeDoc", type="string", length=255)
   */
  private $routeDoc;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fiche", inversedBy="fiche")
   * @ORM\JoinColumn(nullable=false)
   */
  private $fiche;


  public function getRessourceId()
  {
    return $this->ressource_id;
  }

  public function setTitre($titre)
  {
    $this->titre = $titre;
  }

  public function getTitre()
  {
    return $this->titre;
  }

  public function setRouteDoc($routeDoc)
  {
    $this->routeDoc = $routeDoc;
  }

  public function getRouteDoc()
  {
    return $this->routeDoc;
  }

  /**
     * Set fiche
     *
     * @param \AppBundle\Entity\Fiche $fiche
     *
     * @return fiche
     */
    public function setFiche(\AppBundle\Entity\Fiche $fiche)
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

}