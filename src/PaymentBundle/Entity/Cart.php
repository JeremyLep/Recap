<?php

namespace PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;
use UserBundle\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cart
 *
 * @ORM\Table(name="cart")
 * @ORM\Entity(repositoryClass="PaymentBundle\Repository\CartRepository")
 */
class Cart
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
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

     /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", nullable=false)
     */
    private $price;

     /**
     * @var integer
     *
     * @ORM\Column(name="tax", type="integer", nullable=false)
     */
    private $tax;

    /**
     * @var string
     *
     * @ORM\Column(name="order_id", type="string", nullable=false)
     */
    private $orderId;

    /**
     * @var
     * 
     * @ORM\Column(name="label", type="string", nullable=false)
     */
    private $label;

	/**
     * @var
     * 
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="cart");
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->status  = 0;
        $this->date    = new \DateTime();
        $this->price   = 0;
        $this->tax	   = 0;
        $this->orderId = uniqid();
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
     * Set status
     *
     * @param integer $status
     *
     * @return Cart
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Cart
     */
    public function setPrice($price)
    {
        $this->price = number_format($price, 2);

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return number_format($this->price, 2);
    }

    /**
     * Set tax
     *
     * @param integer $tax
     *
     * @return Cart
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax
     *
     * @return integer
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Get orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }


    /**
     * Get date
     *
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Set label
     *
     * @param string $label
     *
     * @return Cart
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
     * Set type
     *
     * @param integer $type
     *
     * @return Cart
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Cart
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }

    public function comparedArray($paymentArray)
    {
    	$cartArray = array(
    		'name'     => $this->getLabel(),
    		'price'    => strval($this->getPrice()),
    		'currency' => 'EUR',
    		'quantity' => 1
    	);

    	return $cartArray = $paymentArray;
    }

    public function generateCart(\UserBundle\Entity\User $user, $type)
    {
    	$cart = new Cart();
    	if ($type == 1) {
    		$cart->setLabel('Abonnement 6 mois Premium');
    		$cart->setPrice(15);
    	} elseif ($type == 2) {
    		$cart->setLabel('Abonnement 12 mois Premium');
    		$cart->setPrice(25);
    	}
    	$cart->setType($type);
    	$cart->setStatus(0);
    	$cart->setUser($user);

    	return $cart;
    }
}