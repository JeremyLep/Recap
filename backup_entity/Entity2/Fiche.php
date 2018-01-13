<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Fiche
 *
 * @ORM\Table(name="fiche")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FicheRepository")
 * @UniqueEntity(fields="titre", message="Une fiche existe déjà avec ce titre.")
 */
class Fiche
{

    /**
     * @var int
     * @ORM\Column(name="fiche_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $fiche_id;

    /**
     * @var string
     * @Assert\Length(min=8)
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**     
     * @ORM\Column(name="description", type="string", length=255)
     * @Assert\Length(min=20)
     */
    private $description;

    /**
     * @ORM\Column(name="date_creation", type="datetime")
     * @Assert\Datetime()
    */
    private $date_creation;

    /**
     * @ORM\Column(name="duree", type="string")
    */
    private $duree;

    /**
     * @ORM\Column(name="difficulte", type="string")
    */
    private $difficulte;

    /**
     * @ORM\Column(name="note_auteur", type="integer")
    */
    private $note_auteur;

    /**
     * @ORM\Column(name="note_user", type="integer")
    */
    private $note_user;

    /**
     * @ORM\Column(name="nb_ressource", type="integer")
     */
    private $nb_ressource;

    /**
     * @ORM\Column(name="nb_commentaire", type="integer")
    */
    private $nb_commentaire;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fiche", inversedBy="groupe")
     * @ORM\JoinColumn(nullable=false)
    */
    private $groupe;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ressource", mappedBy="fiche")
    */
    private $ressources;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Commentaire", mappedBy="fiche")
    */
    private $commentaires;


     public function __construct()
    {
        $this->date_creation = new \Datetime();
    }


    /**
     * Get fiche_id
     *
     * @return int
     */
    public function getFicheId()
    {
        return $this->fiche_id;
    }

    /**
     * Set date_creation
     *
     * @param \Datetime $date_creation
     *
     * @return Fiche
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     * Get date_creation
     *
     * @return \Datetime
     */
    public function getDateCreation()
    {
        return $this->date_creation;
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
        $this->duree = $duree;

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
     * Set note_auteur
     *
     * @param integer $note_auteur
     *
     * @return Fiche
     */
    public function setNoteAuteur($note_auteur)
    {
        $this->note_auteur = $note_auteur;

        return $this;
    }

    /**
     * Get note_auteur
     *
     * @return integer
     */
    public function getNoteAuteur()
    {
        return $this->note_auteur;
    }

    /**
     * Set note_user
     *
     * @param integer $note_user
     *
     * @return Fiche
     */
    public function setNoteUser($note_user)
    {
        $this->note_user = $note_user;

        return $this;
    }

    /**
     * Get note_user
     *
     * @return integer
     */
    public function getNoteUser()
    {
        return $this->note_user;
    }


    public function getNb_Ressource()
    {
        return $this->nb_ressource;
    }

    /**
     * Set nb_ressource
     *
     * @param integer $nb_ressource
     *
     * @return Fiche
     */
    public function setNb_Ressource($nb_ressource)
    {
        $this->nb_ressource = $nb_ressource;

        return $this;
    }

    public function incremRessource()
    {
        $this->nb_ressource++;
    }

    public function decremRessource()
    {
        $this->nb_ressource--;
    }

    public function getNb_Commentaire()
    {
        return $this->nb_commentaire;
    }

    /**
     * Set nb_commentaire
     *
     * @param integer $nb_commentaire
     *
     * @return Fiche
     */
    public function setNb_Commentaire($nb_commentaire)
    {
        $this->nb_commentaire = $nb_commentaire;

        return $this;
    }


    public function incremCommentaire()
    {
        $this->nb_commentaire++;
    }

    public function decremCommentaire()
    {
        $this->nb_commentaire--;
    }

    /**
     * Set groupe
     *
     * @param \AppBundle\Entity\Groupe $groupe
     *
     * @return Fiche
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
     * Add commentaire
     *
     * @param \AppBundle\Entity\Commentaire $commentaire
     *
     * @return Fiche
     */
    public function addCommentaire(\AppBundle\Entity\commentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;
        $commentaires->setFiche($this);
        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \AppBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\AppBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires->removeElement($commentaire);
    }

    /**
     * Get commentaire
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
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
        $this->ressources[] = $ressource;
        $ressources->setFiche($this);
        return $this;
    }

    /**
     * Remove ressource
     *
     * @param \AppBundle\Entity\Ressource $ressource
     */
    public function removeRessource(\AppBundle\Entity\Ressource $ressource)
    {
        $this->ressources->removeElement($ressource);
    }

    /**
     * Get ressource
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRessources()
    {
        return $this->ressources;
    }
}
