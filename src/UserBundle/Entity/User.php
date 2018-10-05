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
     * @Assert\Length(min=2, max=25, minMessage="Votre nom doit contenir au moins 3 caractères", maxMessage="Votre nom ne doit pas contenir plus de 25 caractères")
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", nullable=true)
     * @Assert\Length(min=2, max=15, minMessage="Votre prénom doit contenir au moins 3 caractères", maxMessage="Votre prénom ne doit pas contenir plus de 15 caractères")
     */
    protected $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", nullable=true)
     */
    protected $avatar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="datetime", nullable=false)
     * @Assert\DateTime()
     * @Assert\NotBlank()
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
     * @Assert\Length(min=2, max=40, minMessage="Votre nom de ville doit contenir au moins 2 caractères.", maxMessage="Votre nom de ville ne doit pas contenir plus de 40 caractères.")
     */
    protected $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=8, nullable=true)
     */
    private $color;

    /**
     * @var boolean
     *
     * @ORM\Column(name="premium", type="boolean", nullable=false)
     */
    protected $premium;

    /**
     * @var float
     *
     * @ORM\Column(name="filesize", type="float", nullable=false)
     */
    protected $filesize;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expire_premium", type="datetime", nullable=true)
     * @Assert\DateTime()
     * @Assert\NotBlank()
     */
    public $expirePremium;

    /**
     * @var \GroupeBundle\Entity\Membre
     *
     * @ORM\OneToMany(targetEntity="GroupeBundle\Entity\Membre", mappedBy="user")
     *
     */
    private $membre;


    /**
     * @var \FicheBundle\Entity\Ressource
     *
     * @ORM\OneToMany(targetEntity="FicheBundle\Entity\Ressource", mappedBy="auteur")
     *
     */
    private $ressource;

    /**
     * @var \GroupeBundle\Entity\Groupe
     *
     * @ORM\OneToMany(targetEntity="GroupeBundle\Entity\Groupe", mappedBy="user")
     *
     */
    private $groupe;

    /**
     * @var \FicheBundle\Entity\Favoris
     *
     * @ORM\OneToMany(targetEntity="FicheBundle\Entity\Favoris", mappedBy="user")
     *
     */
    protected $favoris;

    /**
     * @var \GroupeBundle\Entity\Invite
     *
     * @ORM\OneToMany(targetEntity="GroupeBundle\Entity\Invite", mappedBy="auteur")
     *
     */
    protected $invite;

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
     * @var \PaymentBundle\Entity\Cart
     *
     * @ORM\OneToMany(targetEntity="PaymentBundle\Entity\Cart", mappedBy="user")
     *
     */
    protected $cart;

    /**
     * 
     *
     */
	public function __construct()
    {
        parent::__construct();
        $this->dateInscription = new \DateTime;
        $this->notification    = new Collections\ArrayCollection;
        $this->color           = "#".str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT).str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT).str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
        $this->expirePremium   = null;
        $this->filesize        = 0;
        $this->premium         = false;
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
     * Is premium
     *
     * @return boolean
     */
    public function isPremium()
    {
        return $this->premium;
    }

    /**
     * Get filesize
     *
     * @return float
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Set filesize
     *
     * @param float $filesize
     *
     * @return float
     */
    public function setFilesize(Float $filesize)
    {
        $this->filesize = $this->filesize + $filesize;

        return $this;
    }

    /**
     * delete filesize
     *
     * @param float $filesize
     *
     * @return float
     */
    public function deleteFilesize(Float $filesize)
    {
        $this->filesize = $this->filesize - $filesize;

        return $this;
    }

    /**
     * Set premium
     *
     * @return premium
     */
    public function setPremium($type)
    {
        $this->premium = true;
        if ($type === 1) {
            $this->expirePremium = new \DateTime('+6 months');
        } else {
            $this->expirePremium = new \DateTime('+1 years');
        }

        return $this;
    }

    /**
     * Get expirePremium
     *
     * @return float
     */
    public function getExpirePremium()
    {
        return $this->expirePremium;
    }

    /**
     * Remaining premium time
     *
     * @return datetime
     */
    public function getRemainTime()
    {
        $time = $this->getExpirePremium()->diff(new \DateTime())->format('%m mois, %d jours et %h heures');

        return $time;
    }

    /**
     * Set groupe
     *
     * @param \GroupeBundle\Entity\Groupe $groupe
     *
     * @return Groupe
     */
    public function setGroupe(\GroupeBundle\Entity\Groupe $groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return GroupeBundle\Entity\Groupe
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
     * @param \GroupeBundle\Entity\Membre $membre
     *
     * @return Membre
     */
    public function setMembre(\GroupeBundle\Entity\Membre $membre)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Get membre
     *
     * @return \GroupeBundle\Entity\Membre
     */
    public function getMembre()
    {
        return $this->membre;
    }

    /**
     * Set ressource
     *
     * @param \FicheBundle\Entity\Ressource $ressource
     *
     * @return Ressource
     */
    public function setRessource(\FicheBundle\Entity\Ressource $ressource)
    {
        $this->ressource = $ressource;

        return $this;
    }

    /**
     * Get ressource
     *
     * @return \FicheBundle\Entity\Ressource
     */
    public function getRessource()
    {
        return $this->ressource;
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
        $this->userBridge->add($userBridge);

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
            $this->notification->add($notification);    
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

    public function convertFilesize($bytes)
    {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' B';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' B';
        } else {
            $bytes = '0 B';
        }

        return $bytes;
    }
}