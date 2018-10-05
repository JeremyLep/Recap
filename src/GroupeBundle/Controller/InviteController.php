<?php

namespace GroupeBundle\Controller;

use GroupeBundle\Entity\Invite;
use GroupeBundle\Entity\Membre;
use GroupeBundle\Form\InviteType;
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
      ->getRepository('GroupeBundle:Invite')
      ->findBy(
        array('email' => $this->getUser()->getEmail()),
        array('dateExpiration' => 'DESC')
      );

    if (!empty($invites)) {
      $now = new \DateTime();
      $now->format('d/m/y H:i:s');

      foreach ($invites as $invite) {
        if ($invite->getDateExpiration() < $now && $invite->getActive() == "En attente") {
          $invite->setActive("Expiré");

          $em->persist($invite);
          $em->flush();
        }
      }
    }
      
    return $this->render('GroupeBundle:Invite:index.html.twig', array(
      'invites' => $invites,
    )); 
  }

  public function addAction(Request $request, $groupeId)
  {
    try {
    	$em = $this->getDoctrine()->getManager();

      $membre = $em
              ->getRepository('GroupeBundle:Membre')
              ->findOneBy(array(
                  'user'   => $this->getUser(),
                  'groupe' => $groupeId,
              ));
          
      if ($membre === null || !$membre->hasRole('ROLE_INVITE')) {
        throw new AccessDeniedException('Vous ne pouvez ajouter de nouveau membres au groupe.');
      }

      $groupe = $em
        ->getRepository('GroupeBundle:Groupe')
        ->findOneBy(array(
          'id' => $groupeId,
        ));

      $invite = new Invite();
      $form   = $this->createForm(InviteType::class, $invite);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {

        $email = $form->get('email')->getData();
        
        $existMembre = $em
          ->getRepository('GroupeBundle:Invite')
          ->findOneBy(array(
            'email'  => $email,
            'groupe' => $groupe,
            'active' => array(
              'En attente',
              'Confirmé'
            )
          ));
        
        if ($existMembre !== null || $email == $this->getUser()->getEmail()) {
          throw new NotFoundHttpException('Cet utilisateur est déjà un membre du groupe');
        }

    		$invite->setGroupe($groupe);
        $invite->setAuteur($this->getUser());

        $this->get('app.send_mail')->sendMail(
          'GroupeBundle:Mail:invite.html.twig',
          array('invite' => $invite),
          'Recap - Vous avez été invité à un nouveau groupe',
          $email
        );

    		$em->persist($invite);
        $em->flush();

        return $this->redirectToRoute('app_invite');
      }

      return $this->render('GroupeBundle:Invite:add.html.twig', array(
        'groupe' => $groupe,
        'form'	 => $form->createView()
      ));
    } catch (AccessDeniedException $e) {
      $this->get('session')->getFlashBag()->add('danger', $e->getMessage());
      
      return $this->redirectToRoute('app_groupe', array(
        'groupeId' => $groupeId
      ));
    } catch (NotFoundHttpException $e) {
      $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

      return $this->redirectToRoute('app_groupe', array(
        'groupeId' => $groupeId
      ));
    }
  }

  public function inviteConfirmAction(Request $request)
  {
    $em   = $this->getDoctrine()->getManager();

    $invites = $em
      ->getRepository('GroupeBundle:Invite')
      ->findBy(
          array('email' => $this->getUser()->getEmail()),
          array('dateExpiration' => 'DESC')
      );

    $invite = $em
      ->getRepository('GroupeBundle:Invite')
      ->findOneBy(array(
        'id' => $request->get('id')
      ));

    if ($request->get('confirm') == 'true') {
      $invite->setActive('Confirmé');
      //factory || manager
      $membre = new Membre();
      $membre->setUser($this->getUser());
      $membre->setRoles(array('ROLE_USER'));
      $membre->setGroupe($invite->getGroupe());

      $groupe = $invite->getGroupe();
      $groupe->addMembre($membre);

      $em->persist($groupe);
      $em->persist($membre);
    } else {
      $invite->setActive('Refusé');
    }

    $em->persist($invite);
    $em->flush();

    return $this->render('GroupeBundle:Invite:index.html.twig', array(
      'invites' => $invites
    ));
  }
}