<?php

namespace UserBundle\Controller;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Security;

class ProfilController extends Controller
{
    public function indexAction()
    {
        $profil = $this->getUser();
        
        $securityContext = $this->get('security.authorization_checker');
        
        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException();
        }

        return $this->render('UserBundle:Profil:index.html.twig', array(
            'profil' => $profil,
        ));
    }

    public function editAction(Request $request)
    {
        $em   = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        
        $securityContext = $this->get('security.authorization_checker');
        
        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException();
        }
        
        $editForm = $this->createForm('UserBundle\Form\ProfilType', $user);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em->flush();

            return $this->redirectToRoute('fos_user_profil');
        }

        return $this->render('UserBundle:Profil:edit.html.twig', array(
            'user'     => $user,
            'formEdit' => $editForm->createView()
        ));
    }

    public function deleteAction()
    {
        $securityContext = $this->get('security.authorization_checker');
        
        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException();
        }

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
      
        return $this->redirectToRoute('app_home');
    }
}
