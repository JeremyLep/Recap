<?php

namespace PaymentBundle\Factory;

use \PayPal\Api\Transaction;

class TransactionFactory
{
    static function fromCart(\PaymentBundle\Entity\Cart $cart, $orderId, float $vatRate = 0): Transaction
    {
        $list = new \PayPal\Api\ItemList();

        $item = (new \PayPal\Api\Item())
            ->setName($cart->getLabel())
            ->setPrice($cart->getPrice())
            ->setCurrency('EUR')
            ->setQuantity(1);
        
        $list->addItem($item);
        
        $details = (new \PayPal\Api\Details())
            ->setTax($cart->getTax())
            ->setSubtotal($cart->getPrice());

        $amount = (new \PayPal\Api\Amount())
            ->setTotal($cart->getPrice() + $cart->getTax())
            ->setCurrency("EUR")
            ->setDetails($details);

        return (new \PayPal\Api\Transaction())
            ->setItemList($list)
            ->setDescription($cart->getLabel())
            ->setAmount($amount)
            ->setCustom($orderId);
            // Pass important informations for payment return //
    }
}