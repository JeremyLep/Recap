<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Table(name="groupe_membre")
 * @ORM\Entity
 */
class GroupeMembre
{

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Groupe")
   * @ORM\JoinColumn(nullable=false)
   */
  private $groupe;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Membre")
   * @ORM\JoinColumn(nullable=false)
   */
  private $membre;



    /**
     * Set groupe
     *
     * @param \AppBundle\Entity\Groupe $groupe
     *
     * @return GroupeMembre
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

    /**
     * Set membre
     *
     * @param \AppBundle\Entity\Membre $membre
     *
     * @return GroupeMembre
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