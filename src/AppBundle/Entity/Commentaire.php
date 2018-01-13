<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\Column(name="contenu", type="string", length=700, nullable=true)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_com", type="date", nullable=true)
     */
    private $dateCom;

    /**
     * @var \Fiche
     *
     * @ORM\ManyToOne(targetEntity="Fiche", inversedBy="commentaire")
     */
    private $fiche;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre", inversedBy="commentaire")
     */
    private $membre;

    /**
     * Get Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateCom
     *
     * @param \DateTime $dateCom
     *
     * @return Commentaire
     */
    public function setDateCom($dateCom)
    {
        $this->dateCom = $dateCom;

        return $this;
    }

    /**
     * Get dateCom
     *
     * @return \DateTime
     */
    public function getDateCom()
    {
        return $this->dateCom;
    }

    /**
     * Set fiche
     *
     * @param \AppBundle\Entity\Fiche $fiche
     *
     * @return Commentaire
     */
    public function setFiche(\AppBundle\Entity\Fiche $fiche = null)
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
    public function setMembre(\AppBundle\Entity\Membre $membre = null)
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
