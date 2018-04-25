<?php

namespace PaymentBundle\Factory;

use PayPal\Api\Transaction;

class TransactionFactory
{

    static function fromCart(Cart $cart, float $vatRate = 0): Transaction
    {
        $list = new \PayPal\Api\ItemList();
        foreach ($cart->getAbos() as $abo) {
            $item = (new \PayPal\Api\Item())
                ->setName($abo->getLabel())
                ->setPrice($abo->getPrice())
                ->setCurrency('EUR')
                ->setQuantity(1);
            $list->addItem($item);
        }

        $details = (new \PayPal\Api\Details())
            ->setTax($cart->getVatPrice($vatRate))
            ->setSubtotal($cart->getPrice());

        $amount = (new \PayPal\Api\Amount())
            ->setTotal($cart->getPrice() + $cart->getVatPrice($vatRate))
            ->setCurrency("EUR")
            ->setDetails($details);

        return (new \PayPal\Api\Transaction())
            ->setItemList($list)
            ->setDescription('Abonnement 6 mois Récap')
            ->setAmount($amount)
            ->setCustom('demo-1');
    }

}

$cart = \PaymentBundle\Cart::generateCart();

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        $this->getParameter('paypal_id'),
        $this->getParameter('paypal_secret')
    )
);

$payment = new \PayPal\Api\Payment();
$payment->addTransaction(\Grafikart\TransactionFactory::fromCart($cart));
$payment->setIntent('sale');
$redirectUrls = (new \PayPal\Api\RedirectUrls())
    ->setReturnUrl($this->redirectToRoute('app_payment'))
    ->setCancelUrl($this->redirectToRoute('app_purchase'));
$payment->setRedirectUrls($redirectUrls);
$payment->setPayer((new \PayPal\Api\Payer())->setPaymentMethod('paypal'));

try {
    $payment->create($apiContext);
    header('Location: ' . $payment->getApprovalLink());
} catch (\PayPal\Exception\PayPalConnectionException $e) {
    var_dump(json_decode($e->getData()));
}