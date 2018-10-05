<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class NotificationController extends Controller
{
    public function indexAction($groupeId)
    {
        try {
            $em = $this->getDoctrine()->getManager();

            // get membre left join groupe
            $membre = $em
                ->getRepository('GroupeBundle:Membre')
                ->findOneBy(array(
                    'user'   => $this->getUser(),
                    'groupe' => $groupeId,
                ));
            
            if ($this->get('app.role_validator')->roleUser($membre)) {
                throw new AccessDeniedException('Vous n\'avez pas accès aux notifications de ce groupe.');
            }
            //
            $groupe = $em
              ->getRepository('GroupeBundle:Groupe')
              ->find($groupeId);
            // ????
            $notifications = $em
              ->getRepository('AppBundle:Notification')
              ->getNotifByGroup($groupeId);

            return $this->render('AppBundle:Notification:index.html.twig', array(
                'notifications'  => $notifications,
                'groupe'         => $groupe
            ));
        } catch (AccessDeniedException $e) {
            $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

            return $this->redirectToRoute('app_home');
        }
    }

    public function allAction()
    {
        $em   = $this->getDoctrine()->getManager();

        $notifications = $em
            ->getRepository('AppBundle:UserNotif')
            ->findBy(
                array('user' => $this->getUser()),
                array('date' => 'DESC')
            );
            
        return $this->render('AppBundle:Notification:all.html.twig', array(
            'notifications'  => $notifications,
        ));
    }

    public function ajaxActivatedAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $notifications = $em
            ->getRepository('AppBundle:UserNotif')
            ->findBy(
                array('user' => $this->getUser()),
                array('date' => 'DESC')
            );

        // count dans select
        $notification = $em
            ->getRepository('AppBundle:UserNotif')
            ->findOneBy(array(
                'id' => $request->get('id')
            ));

        if ($notification->isActive() === false) {
            $notification->setActive(true);
            $em->persist($notification);
            $em->flush();
        } else {
            $notification->setActive(false);
            $em->persist($notification);
            $em->flush();
        }

            //
        $nbNotif = $em
            ->getRepository('AppBundle:UserNotif')
            ->countNotif($this->getUser()->getId());

        return $this->render('AppBundle:Notification:panel.html.twig', array(
            'notifications' => $notifications,
            'nbNotif'       => $nbNotif,
        ));
    }

    public function ajaxAllActivatedAction(Request $request)
    {
        $em   = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        // count dans select
        $notifications = $em
            ->getRepository('AppBundle:UserNotif')
            ->findBy(
                array('user' => $user),
                array('date' => 'DESC')
            );

        foreach ($notifications as $notification) {
            if ($notification->isActive()) {
                $notification->setActive(false);
                $em->persist($notification);
                $em->flush();   
            }
        }

        //
        $nbNotif = $em
            ->getRepository('AppBundle:UserNotif')
            ->countNotif($user->getId());

        return $this->render('AppBundle:Notification:panel.html.twig', array(
            'notifications' => $notifications,
            'nbNotif'       => $nbNotif,
        ));
    }

    public function ajaxShowNotifAction(Request $request)
    {
        $em   = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        // count dans select
        $notifications = $em
            ->getRepository('AppBundle:UserNotif')
            ->findBy(
                array('user' => $user),
                array('date' => 'DESC'),
                15,
                0
            );
        //
        $nbNotif = $em
            ->getRepository('AppBundle:UserNotif')
            ->countNotif($user->getId());

        return $this->render('AppBundle:Notification:panel.html.twig', array(
            'notifications' => $notifications,
            'nbNotif'       => $nbNotif,
        ));
    }
}