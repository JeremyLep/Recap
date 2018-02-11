<?php

namespace UserBundle\Entity;

use Doctrine\Common\Collections;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Captcha\Bundle\CaptchaBundle\Validator\Constraints as CaptchaAssert;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
  	/**
   	 * @ORM\Column(name="id", type="integer")
   	 * @ORM\Id
   	 * @ORM\GeneratedValue(strategy="AUTO")
   	 */
  	protected $id;

  	/**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", nullable=true)
     * @Assert\Length(min=2)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", nullable=true)
     * @Assert\Length(min=2)
     */
    protected $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", nullable=true)
     * @Assert\File(
     *     maxSize = "5M",
     *     mimeTypes = {"image/jpeg", "image/gif", "image/png", "image/tiff"},
     *     maxSizeMessage = "La taille maximal d'un avatar est de 5MB.",
     *     mimeTypesMessage = "Seulement des fichier de type image sont autorisé (jpg, png, tiff, gif)"
     * )
     */
    protected $avatar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="datetime", nullable=false)
     * @Assert\DateTime()
     */
    protected $dateInscription;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     * @Assert\Range(min=5, max=99)
     */
    protected $age;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", nullable=true)
     */
    protected $tel;
    /*regex tel pattern @Assert\Regex(pattern="(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}", message="Le numero de téléphone doit etre au format français.")*/


    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", nullable=true)
     * @Assert\Length(min=3)
     */
    protected $ville;

  	/**
     * @var \AppBundle\Entity\Membre
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Membre", mappedBy="user")
     *
     */
    private $membre;

    /**
     * @var \AppBundle\Entity\Groupe
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Groupe", mappedBy="user")
     *
     */
    private $groupe;

    /**
     * @var \AppBundle\Entity\Favoris
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Favoris", mappedBy="user")
     *
     */
    protected $favoris;

    /**
     * @var Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\UserNotif", mappedBy="user")
     */
    protected $userBridge;

    /**
     * @var \AppBundle\Entity\Notification
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Notification", mappedBy="auteur")
     *
     */
    protected $notificationAuteur;

    /**
     * @var string
     *
     *@ORM\Column(name="color", type="string", length=8, nullable=true)
     */
    private $color;


	public function __construct()
    {
        parent::__construct();
        $this->dateInscription = new \DateTime;
        $this->notification    = new Collections\ArrayCollection;
        $this->color           = "#".str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT).str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT).str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
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
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return User
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }


    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set groupe
     *
     * @param \AppBundle\Entity\Groupe $groupe
     *
     * @return Groupe
     */
    public function setGroupe(\AppBundle\Entity\Groupe $groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return AppBundle\Entity\Groupe
     */
    public function getGroupe()
    {
        return $this->groupe;
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
     * Set membre
     *
     * @param \AppBundle\Entity\Membre $membre
     *
     * @return Membre
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

    public function isAuthor(User $user = null)
    {
        return $user && $user->getEmail() == $this->getEmail();
    }


    /**
     * Get userBridge
     *
     * @return Collections\Collection
     */
    public function getUserBridge()
    {
        return $this->userBridge;
    }

    /**
     * Add userBridge
     *
     * @param \UserBundle\Entity\User $userBridge
     *
     * @return User
     */
    public function addUserBridge(\UserBundle\Entity\User $userBridge)
    {
        $this->userBridge[] = $userBridge;

        return $this;
    }

    /**
     * Add notification
     *
     * @param PersistentCollection $notification
     *
     * @return User
     */
    public function addManyNotifications($notifications)
    {   
        foreach ($notifications as $notification) {
            $this->notification[] = $notification;    
        }

        return $this;
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

}