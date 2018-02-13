<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Invite;
use AppBundle\Entity\Groupe;
use AppBundle\Entity\Membre;
use AppBundle\Form\InviteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class InviteController extends Controller
{
  public function indexAction()
  {
    $em = $this->getDoctrine()->getManager();

    $invites = $em
      ->getRepository('AppBundle:Invite')
      ->findBy(
          array('email' => $this->getUser()->getEmail()),
          array('dateExpiration' => 'DESC')
        );

    $now = new \DateTime();
    $now->format('d/m/y H:i:s');

    foreach ($invites as $invite) {
      if ($invite->getDateExpiration() < $now && $invite->getActive() == "En attente") {
        $invite->setActive("Expiré");
        $em->persist($invite);
        $em->flush();
      }
    }

    return $this->render('AppBundle:Invite:index.html.twig', array(
      'invites' => $invites,
    ));
  }

  public function addAction(Request $request, $groupeId)
  {
  	$em = $this->getDoctrine()->getManager();

    $membre = $em
            ->getRepository('AppBundle:Membre')
            ->findOneBy(array(
                'user'   => $this->getUser(),
                'groupe' => $groupeId,
            ));
        
    if ($membre === null || !$membre->hasRole('ROLE_MODO')) {
      throw new AccessDeniedException();
    }

    $groupe = $em
      ->getRepository('AppBundle:Groupe')
      ->findOneBy(array(
        'id' => $groupeId,
      ));

    $invite = new Invite();
    $form   = $this->createForm(InviteType::class, $invite);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      		
      $email = $form->get('email')->getData();

  		$invite->setGroupe($groupe);
      $invite->setAuteur($this->getUser());

      // ****** MAILER ****** \\
/*      $message = (new \Swift_Message('Récap - Vous avez été invité à un nouveau groupe'))
        ->setFrom('noreply@recap.com')
        ->setTo($email)
        ->setBody(
            $this->renderView(
                'AppBundle:Email:invite.html.twig',
                array('invite' => $invite)
            ),
            'text/html'
        );

      $this->get('mailer')->send($message);
*/
  		$em->persist($invite);
      $em->flush();

      return $this->redirectToRoute('app_invite', array(
        'groupeId' => $groupe->getId()
      ));
    }

    return $this->render('AppBundle:Invite:add.html.twig', array(
      'groupe' => $groupe,
      'form'	 => $form->createView()
    ));
  }

  public function inviteConfirmAction(Request $request)
  {
    $em   = $this->getDoctrine()->getManager();
    $user = $this->getUser();

    $invites = $em
      ->getRepository('AppBundle:Invite')
      ->findBy(
          array('email' => $this->getUser()->getEmail()),
          array('dateExpiration' => 'DESC')
      );

    if ($request->isXmlHttpRequest()) {
      $invite = $em
        ->getRepository('AppBundle:Invite')
        ->findOneBy(array(
          'id' => $request->get('id')
        ));

        //var_dump($request->get('confirm'));die;
      if ($request->get('confirm') == 'true') {
        $invite->setActive('Confimé');
        $membre = new Membre();
        $membre->setUser($user);
        $membre->setRoles(array('ROLE_USER'));
        $membre->setGroupe($invite->getGroupe());
        $em->persist($membre);
      } else {
        $invite->setActive('Refusé');
      }
        $em->persist($invite);
        $em->flush();
    }

    return $this->render('AppBundle:Invite:index.html.twig', array(
      'invites' => $invites
    ));   // Retourne Default:invite && row or table Invite:index  // Default:invite => move => Invite 
  }
}