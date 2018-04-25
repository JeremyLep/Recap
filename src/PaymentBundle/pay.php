<?php

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        $this->getParameter('paypal_id'),
        $this->getParameter('paypal_secret')
    )
);

$cart = \Grafikart\Cart::generateCart();
$payment = \PayPal\Api\Payment::get($_GET['paymentId'], $apiContext);

$execution = (new \PayPal\Api\PaymentExecution())
    ->setPayerId($_GET['payerID'])
    ->addTransaction(\PaymentBundle\Factory\TransactionFactory::fromCart($cart, 0.2));

try {
    $payment->execute($execution, $apiContext);
    echo 'Merci pour votre paiement';
} catch (\PayPal\Exception\PayPalConnectionException $e) {
    header('HTTP 500 Internal Server Error', true, 500);
    var_dump(json_decode($e->getData()));
}