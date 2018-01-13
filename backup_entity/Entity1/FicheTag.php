<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Table(name="fiche_tag")
 * @ORM\Entity
 */
class FicheTag
{

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fiche")
   * @ORM\JoinColumn(nullable=false)
   */
  private $fiche;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tag")
   * @ORM\JoinColumn(nullable=false)
   */
  private $tag;



    /**
     * Set fiche
     *
     * @param \AppBundle\Entity\Fiche $fiche
     *
     * @return FicheTag
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
     * Set Tag
     *
     * @param \AppBundle\Entity\Tag $tag
     *
     * @return FicheTag
     */
    public function setTag(\AppBundle\Entity\Tag $tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get Tag
     *
     * @return \AppBundle\Entity\Tag
     */
    public function getTag()
    {
        return $this->tag;
    }
}