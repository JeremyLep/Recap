<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Table(name="compte_groupe")
 * @ORM\Entity
 */
class CompteGroupe
{

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Compte")
   * @ORM\JoinColumn(nullable=false)
   */
  private $compte;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Groupe")
   * @ORM\JoinColumn(nullable=false)
   */
  private $groupe;



    /**
     * Set compte
     *
     * @param \AppBundle\Entity\Compte $compte
     *
     * @return CompteGroupe
     */
    public function setCompte(\AppBundle\Entity\Compte $compte)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get compte
     *
     * @return \AppBundle\Entity\Compte
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set groupe
     *
     * @param \AppBundle\Entity\Groupe $groupe
     *
     * @return CompteGroupe
     */
    public function setGroupe(\AppBundle\Entity\Groupe $groupe)
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
}