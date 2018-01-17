<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;
use Doctrine\ORM\PersistentCollection;
use \DateTime;

/**
 * Fiche
 *
 * @ORM\Table(name="fiche")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FicheRepository")
 */
class Fiche
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
     * @ORM\Column(name="theme", type="string", length=100, nullable=true)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1500, nullable=true)
     */
    private $description;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=25, nullable=true)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulte", type="string", length=50, nullable=true)
     */
    private $difficulte;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="smallint", nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_ressource", type="integer", nullable=true)
     */
    private $nbRessource;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_commentaire", type="integer", nullable=true)
     */
    private $nbCommentaire;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre", inversedBy="fiche")
     */
    private $auteur;

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe", inversedBy="fiche")
     */
    private $groupe;

    /**
     * @var Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="fiche", cascade={"persist"})
     */
    private $tag;

    /**
     * @var \Commentaire
     *
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="fiche", cascade={"persist", "remove"})
     *
     */
    private $commentaire;

    /**
     * @var \Ressource
     *
     * @ORM\OneToMany(targetEntity="Ressource", mappedBy="fiche", cascade={"persist", "remove"})
     *
     */
    private $ressource;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tag           = new Collections\ArrayCollection();
        $this->commentaire   = new Collections\ArrayCollection();
        $this->ressource     = new Collections\ArrayCollection();
        $this->dateCreation  = new DateTime();
        $this->nbRessource   = 0;
        $this->nbCommentaire = 0;
    }


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
     * Set theme
     *
     * @param string $theme
     *
     * @return Fiche
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Fiche
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Fiche
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateCreation
     *
     * @param DateTime $dateCreation
     *
     * @return Fiche
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Fiche
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set difficulte
     *
     * @param string $difficulte
     *
     * @return Fiche
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    /**
     * Get difficulte
     *
     * @return string
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Fiche
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set nbRessource
     *
     * @param integer $nbRessource
     *
     * @return Fiche
     */
    public function setNbRessource($nbRessource)
    {
        $this->nbRessource = $nbRessource;

        return $this;
    }

    /**
     * Get nbRessource
     *
     * @return integer
     */
    public function getNbRessource()
    {
        return $this->nbRessource;
    }

    /**
     * Set nbCommentaire
     *
     * @param integer $nbCommentaire
     *
     * @return Fiche
     */
    public function setNbCommentaire($nbCommentaire)
    {
        $this->nbCommentaire = $nbCommentaire;

        return $this;
    }

    /**
     * Get nbCommentaire
     *
     * @return integer
     */
    public function getNbCommentaire()
    {
        return $this->nbCommentaire;
    }

    /**
     * Set auteur
     *
     * @param \AppBundle\Entity\Membre $auteur
     *
     * @return Fiche
     */
    public function setAuteur(\AppBundle\Entity\Membre $auteur = null)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \AppBundle\Entity\Membre
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set groupe
     *
     * @param \AppBundle\Entity\Groupe $groupe
     *
     * @return Fiche
     */
    public function setGroupe(\AppBundle\Entity\Groupe $groupe = null)
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
     * Add tag
     *
     * @param \AppBundle\Entity\Tag $tag
     *
     * @return Fiche
     */
    public function addTag(\AppBundle\Entity\Tag $tag)
    {
        $this->tag[] = $tag;

        return $this;
    }

    /**
     * Add tag
     *
     * @param PersistentCollection $tag
     *
     * @return Fiche
     */
    public function addManyTags($tags)
    {   
        foreach ($tags as $tag) {
            $this->tag[] = $tag;    
        }

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \AppBundle\Entity\Tag $tag
     */
    public function removeTag(\AppBundle\Entity\Tag $tag)
    {
        $this->tag->removeElement($tag);
    }

    /**
     * Remove tag
     *
     * @param PersistentCollection $tag
     */
    public function removeManyTags(PersistentCollection $tags)
    {
        foreach ($tags as $tag) {
            $this->tag->removeElement($tag);   
        }
    }

    /**
     * Get tag
     *
     * @return Collections\Collection
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Get ressource
     *
     * @return Collections\Collection
     */
    public function getRessource()
    {
        return $this->ressource;
    }

    /**
     * Get commentaire
     *
     * @return Collections\Collection
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Add commentaire
     *
     * @param \AppBundle\Entity\Commentaire $commentaire
     *
     * @return Fiche
     */
    public function addCommentaire(\AppBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaire[] = $commentaire;
        $this->nbCommentaire++;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \AppBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\AppBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaire->removeElement($commentaire);
        $this->nbCommentaire--;
    }

    /**
     * Add ressource
     *
     * @param \AppBundle\Entity\Ressource $ressource
     *
     * @return Fiche
     */
    public function addRessource(\AppBundle\Entity\Ressource $ressource)
    {
        $this->ressource[] = $ressource;
        $this->nbRessource++;

        return $this;
    }

    /**
     * Remove ressource
     *
     * @param \AppBundle\Entity\Ressource $ressource
     */
    public function removeRessource(\AppBundle\Entity\Ressource $ressource)
    {
        $this->ressource->removeElement($ressource);
        $this->nbRessource--;
    }
}
