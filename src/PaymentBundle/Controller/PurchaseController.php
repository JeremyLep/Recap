<?php

namespace PaymentBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use \Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PurchaseController extends Controller
{
    public function indexAction()
    {	
    	if ($this->getUser()->isPremium()) {
    		$this->get('session')->getFlashBag()->add('danger', sprintf('Vous possédez déjà un compte <b>Premium</b>.<br>Il vous reste <b>%s</b> avant que votre compte premium expire.', $this->getUser()->getRemainTime()));

		    return $this->redirectToRoute('app_home');
    	}
		return $this->render('PaymentBundle::index.html.twig');
    }

    public function purchaseAction($type)
    {
    	$em = $this->getDoctrine()->getManager();
    	
    	if ($this->getUser()->isPremium()) {
    		$this->get('session')->getFlashBag()->add('danger', sprintf('Vous possédez déjà un compte <b>Premium</b>.<br>Il vous reste <b>%s</b> avant que votre compte premium expire.', $this->getUser()->getRemainTime()));

		   	return $this->redirectToRoute('app_home');
    	}
    	try {
	    	$cart = \PaymentBundle\Entity\Cart::generateCart($this->getUser(), $type);

			$apiContext = new \PayPal\Rest\ApiContext(
			    new \PayPal\Auth\OAuthTokenCredential(
			        $this->getParameter('paypal_id'),
			        $this->getParameter('paypal_secret')
			    )
			);

			$payment = new \PayPal\Api\Payment();
			$payment->addTransaction(\PaymentBundle\Factory\TransactionFactory::fromCart($cart, $cart->getOrderId()));

			$payment->setIntent('sale');

			$redirectUrls = (new \PayPal\Api\RedirectUrls())
			    ->setReturnUrl('http://127.0.0.1' . $this->generateUrl('app_payment'))
			    ->setCancelUrl('http://127.0.0.1' . $this->generateUrl('app_purchase'));

			$payment->setRedirectUrls($redirectUrls);
			$payment->setPayer((new \PayPal\Api\Payer())->setPaymentMethod('paypal'));

		
		    $payment->create($apiContext);
		    $em->persist($cart);
		    $em->flush();

		    return $this->redirect($payment->getApprovalLink());
		} catch (\PayPal\Exception\PayPalConnectionException $e) {
		    $this->get('session')->getFlashBag()->add('danger', 'Une erreur s\'est produite lors de votre achat. Veuillez réessayer.');

		    return $this->redirectToRoute('app_home');
		} catch (\InvalidArgumentException $e) {
			$this->get('session')->getFlashBag()->add('danger', 'Une erreur s\'est produite lors de votre achat. Veuillez réessayer.');

		    return $this->redirectToRoute('app_home');
		} catch (\Exception $e) {
			$this->get('session')->getFlashBag()->add('danger', $e);

		    return $this->redirectToRoute('app_home');
		}
    }
}