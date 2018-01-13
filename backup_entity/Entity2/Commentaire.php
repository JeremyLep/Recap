<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Table(name="commentaire")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentaireRepository")
 */
class Commentaire
{

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fiche", inversedBy="Commentaires")
   * @ORM\JoinColumn(nullable=false)
   */
  private $fiche;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Membre", inversedBy="Commentaires")
   * @ORM\JoinColumn(nullable=false)
   */
  private $membre;
  
  /**
   * @ORM\Column(name="commentaire_id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $commentaire_id;


  /**
   * @ORM\Column(name="contenu", type="text")
   */
  private $contenu;

  /**
   * @ORM\Column(name="date_com", type="datetime")
   */
  private $date_com;
  
  public function __construct()
  {
    $this->date_com = new \Datetime();
  }

  /**
   * @ORM\PrePersist
   */
  public function increm()
  {
    $this->getFiche()->incremNbCommentaire();
  }

  /**
   * @ORM\PreRemove
   */
  public function decrem()
  {
    $this->getFiche()->decremNbCommentaire();
  }

  public function getCommentaireId()
  {
    return $this->commentaire_id;
  }

  public function setContenu($contenu)
  {
    $this->contenu = $contenu;

    return $this;
  }

  public function getContenu()
  {
    return $this->contenu;
  }

  public function setDateCom(\Datetime $date_com)
  {
    $this->date_com = $date_com;

    return $this;
  }

  public function getDateCom()
  {
    return $this->date_com;
  }

    /**
     * Set fiche
     *
     * @param \AppBundle\Entity\Fiche $fiche
     *
     * @return Commentaire
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


    /**
     * Set membre
     *
     * @param \AppBundle\Entity\Membre $membre
     *
     * @return Commentaire
     */
    public function setMembre(\AppBundle\Entity\Membre $membre)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Get membre
     *
     * @return \AppBundle\Entity\Membre
     */
    public function getMembre()
    {
        return $this->membre;
    }
}
