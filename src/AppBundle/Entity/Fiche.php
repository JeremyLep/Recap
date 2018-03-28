<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;
use Doctrine\ORM\PersistentCollection;
use Symfony\Component\Validator\Constraints as Assert;
use \DateTime;

/**
 * Fiche
 *
 * @ORM\Table(name="fiche", indexes={@ORM\Index(columns={"theme", "titre", "description"}, flags={"fulltext"})})
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
     * @ORM\Column(name="theme", type="string", length=25, nullable=false)
     * @Assert\Length(min=3, max=25, minMessage="Votre thème doit contenir au moins 3 caractères", maxMessage="Votre thème ne peut contenir plus de 25 caractères")
     * @Assert\NotNull()
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=30, nullable=true)
     * @Assert\Length(min=3, max=30, minMessage="Votre titre de fiche doit contenir au moins 3 caractères", maxMessage="Votre titre de fiche ne peut contenir plus de 30 caractères")
     * @Assert\NotNull()
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1200, nullable=true)
     * @Assert\Length(min=3, max=1200, minMessage="Votre description doit contenir au moins 3 caractères", maxMessage="Votre description ne peut contenir plus de 1200 caractères")
     * @Assert\NotNull()
     */
    private $description;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     * @Assert\DateTime()
     * @Assert\NotNull()
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=25, nullable=true)
     * @Assert\Length(min=3, max=25, minMessage="Votre durée doit contenir au moins 3 caractères", maxMessage="Votre durée ne peut contenir plus de 25 caractères")
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulte", type="string", length=25, nullable=true)
     * @Assert\Length(min=3, max=25, minMessage="Votre difficulté doit contenir au moins 3 caractères", maxMessage="Votre difficulté ne peut contenir plus de 25 caractères")
     */
    private $difficulte;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_ressource", type="integer", nullable=false)
     * @Assert\NotBlank()
     */
    private $nbRessource;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_commentaire", type="integer", nullable=false)
     * @Assert\NotBlank()
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
     * @var \Favoris
     *
     * @ORM\OneToMany(targetEntity="Favoris", mappedBy="fiche", cascade={"persist", "remove"})
     *
     */
    private $favoris;

    /**
     * @var \Ressource
     *
     * @ORM\OneToMany(targetEntity="Ressource", mappedBy="fiche", cascade={"persist", "remove"})
     *
     */
    private $ressource;

    /**
     * @var \Note
     *
     * @ORM\OneToMany(targetEntity="Note", mappedBy="fiche", cascade={"persist", "remove"})
     *
     */
    protected $note;


    /**
     * @var \AppBundle\Entity\Notification
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Notification", mappedBy="fiche")
     *
     */
    private $notification;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tag           = new Collections\ArrayCollection();
        $this->commentaire   = new Collections\ArrayCollection();
        $this->favoris       = new Collections\ArrayCollection();
        $this->ressource     = new Collections\ArrayCollection();
        $this->notification  = new Collections\ArrayCollection();
        $this->note          = new Collections\ArrayCollection();
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

    /*public function setNote($note)
    {
        $this->note = (int)round(($this->getNbNote() * $this->note + $note) / ($this->getNbNote()+1));
        $this->nbNote++;

        return $this;
    }*/

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
        $this->tag->add($tag);

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
            $this->tag->add($tag);    
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
     * Get favoris
     *
     * @return Collections\Collection
     */
    public function getFavoris()
    {
        return $this->favoris;
    }

    /**
     * Get Note
     *
     * @return Collections\ArrayCollection
     */
    public function getNotes()
    {
        return $this->note;
    }

    public function averageNote()
    {
        if ($this->countNote() === 0) {
            return 0;
        }
        
        $averageNote = 0;
        foreach ($this->getNotes() as $note) {
            $averageNote += $note->getNote();
        }

        return round($averageNote / $this->countNote());
    }

    public function countNote()
    {
        return count($this->getNotes());
    }

    /**
     * add Note
     *
     * @return Collections\ArrayCollection
     */
    public function addNote(\AppBundle\Entity\Note $note)
    {
        $this->note->add($note);

        return $this;
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
     * Get notification
     *
     * @return Collections\Collection
     */
    public function getNotification()
    {
        return $this->notification;
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
        $this->commentaire->add($commentaire);
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
        $this->ressource->add($ressource);
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
