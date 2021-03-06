<?php

namespace FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tag
 *
 * @ORM\Table(name="tag", indexes={@ORM\Index(columns={"label"}, flags={"fulltext"})})
 * @ORM\Entity(repositoryClass="FicheBundle\Repository\TagRepository")
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
     * @ORM\Column(name="label", type="string", length=15, nullable=false)
     * @Assert\Length(min=2, max=15, minMessage="Votre label de tag doit contenir au moins 2 caractères", maxMessage="Votre label de tag ne peut contenir plus de 15 caractères")
     * @Assert\NotBlank()
     */
    private $label;

    /**
     *
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=8, nullable=false)
     * @Assert\Length(min=3, max=12)
     * @Assert\NotBlank()
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
        $this->color = $this->generateColor();
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
     * @param \FicheBundle\Entity\Fiche $fiche
     *
     * @return Tag
     */
    public function addFiche(\FicheBundle\Entity\Fiche $fiche)
    {
        $this->fiche->add($fiche);

        return $this;
    }

    /**
     * Remove fiche
     *
     * @param \FicheBundle\Entity\Fiche $fiche
     */
    public function removeFiche(\FicheBundle\Entity\Fiche $fiche)
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

    /**
     * Generate random color
     *
     * @return String
     */
    private function generateColor()
    {
        return "#" . str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT).str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT).str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
    }
}