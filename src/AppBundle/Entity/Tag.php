<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;

/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TagRepository")
 */
class Tag
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
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=25, nullable=true)
     */
    private $label;

    /**
     *
     * @var string
     *
     *@ORM\Column(name="color", type="string", length=8, nullable=false)
     */
    private $color;

    /**
     * @var Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fiche", mappedBy="tag", cascade={"persist"})
     */
    private $fiche;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fiche = new Collections\ArrayCollection();
        $this->color = "#".str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT).str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT).str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
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
     * Set label
     *
     * @param string $label
     *
     * @return Tag
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Tag
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Add fiche
     *
     * @param \AppBundle\Entity\Fiche $fiche
     *
     * @return Tag
     */
    public function addFiche(\AppBundle\Entity\Fiche $fiche)
    {
        $this->fiche[] = $fiche;

        return $this;
    }

    /**
     * Remove fiche
     *
     * @param \AppBundle\Entity\Fiche $fiche
     */
    public function removeFiche(\AppBundle\Entity\Fiche $fiche)
    {
        $this->fiche->removeElement($fiche);
    }

    /**
     * Get fiche
     *
     * @return Collections\Collection
     */
    public function getFiche()
    {
        return $this->fiche;
    }
}