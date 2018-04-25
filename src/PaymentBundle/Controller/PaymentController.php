<?php

namespace PaymentBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class PaymentController extends Controller
{
    public function indexAction(Request $request)
    {
    	$em   = $this->getDoctrine()->getManager();
    	$user = $this->getUser();
    	
    	$apiContext = new \PayPal\Rest\ApiContext(
		    new \PayPal\Auth\OAuthTokenCredential(
		        $this->getParameter('paypal_id'),
		        $this->getParameter('paypal_secret')
		    )
		);

		$payment = \PayPal\Api\Payment::get($request->get('paymentId'), $apiContext);

		$orderId = $payment->getTransactions()[0]->getCustom();
		
    	$cart = $em->getRepository('PaymentBundle:Cart')
            	   ->findOneBy(array(
            	   		'user'    => $user,
            	   		'orderId' => $orderId,
            	   		'status'  => 0
            		));

		$execution = (new \PayPal\Api\PaymentExecution())
		    ->setPayerId($request->get('PayerID'))
		    ->addTransaction(\PaymentBundle\Factory\TransactionFactory::fromCart($cart, $orderId));

		try {
		    if (!$cart->comparedArray($payment->getTransactions()[0]->getItemList()->getItems()[0])) {
		    	throw new \Exception(sprintf('Il s\'est produit une erreur lors du payement de l\'%s, veuillez réessayer.<br>Vus n\'avez pas été débité.<br>Veuillez contacter l\'équipe Récap si l\'erreur persiste', $cart->getLabel()));
		    }
		    $payment->execute($execution, $apiContext);
		    $cart->setStatus(1);
		    $user->setPremium($cart->getType());

		   	$em->persist($cart);
		   	$em->persist($user);
		   	$em->flush();

		    $this->get('session')->getFlashBag()->add('success', sprintf('Merci de votre achat d\'un %s ! Vous bénéficiez maintenant d\'un compte premium.', $cart->getLabel()));

		    return $this->redirectToRoute('app_home');
		} catch (\PayPal\Exception\PayPalConnectionException $e) {
			$cart->setStatus(-1);
		   	$em->persist($cart);
		   	$em->flush();
			
			$this->get('session')->getFlashBag()->add('danger', sprintf('Il s\'est produit une erreur lors du payement de l\'%s, veuillez réessayer.<br>Vus n\'avez pas été débité.<br>Veuillez contacter l\'équipe Récap si l\'erreur persiste', $cart->getLabel()));
			
			return $this->redirectToRoute('app_home');
		} catch (\Exception $e) {
			$cart->setStatus(-1);
		    $em->persist($cart);
		   	$em->flush();
			
			$this->get('session')->getFlashBag()->add('danger', $e);
			
			return $this->redirectToRoute('app_home');
		}
    }
}