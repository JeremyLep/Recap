<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Groupe;
use AppBundle\Entity\Notification;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class NotificationController extends Controller
{
    public function indexAction($groupeId)
    {
        $em = $this->getDoctrine()->getManager();
        
        $groupe = $em
          ->getRepository('AppBundle:Groupe')
          ->find($groupeId);

        $notifications = $em
          ->getRepository('AppBundle:Notification')
          ->getNotifByGroup($groupeId);

        return $this->render('AppBundle:Notification:index.html.twig', array(
            'notifications'  => $notifications,
            'groupe'         => $groupe
        ));
    }

    public function panelAction()
    {
        $em   = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        
        $notifications = $em
            ->getRepository('AppBundle:UserNotif')
            ->findBy(array('user' => $user), array('date' => 'DESC'));

        $nbNotif = $em
            ->getRepository('AppBundle:UserNotif')
            ->countNotif($user);
        
        return $this->render('AppBundle:Notification:panel.html.twig', array(
            'notifications' => $notifications,
            'nbNotif'       => $nbNotif,
        ));
    }

    public function allAction()
    {
        $em   = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $notifications = $em
            ->getRepository('AppBundle:UserNotif')
            ->findBy(array('user' => $user), array('date' => 'DESC'));
        
        return $this->render('AppBundle:Notification:all.html.twig', array(
            'notifications'  => $notifications,
        ));
    }

    public function ajaxActivatedAction(Request $request)
    {
        $em   = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $notifications = $em
            ->getRepository('AppBundle:UserNotif')
            ->findBy(array('user' => $user), array('date' => 'DESC'));

        if ($request->isXmlHttpRequest()) {
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

            $nbNotif = $em
                ->getRepository('AppBundle:UserNotif')
                ->countNotif($user);

            return $this->render('AppBundle:Notification:panel.html.twig', array(
                'notifications' => $notifications,
                'nbNotif'       => $nbNotif,
            ));
        }
    }

    public function ajaxAllActivatedAction(Request $request)
    {
        $em   = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $notifications = $em
            ->getRepository('AppBundle:UserNotif')
            ->findBy(array('user' => $user), array('date' => 'DESC'));

        if ($request->isXmlHttpRequest()) {

            foreach ($notifications as $notification) {
                if ($notification->isActive()) {
                    $notification->setActive(false);
                    $em->persist($notification);
                    $em->flush();   
                }
            }

            $nbNotif = $em
                ->getRepository('AppBundle:UserNotif')
                ->countNotif($user);

            return $this->render('AppBundle:Notification:panel.html.twig', array(
                'notifications' => $notifications,
                'nbNotif'       => $nbNotif,
            ));
        }
    }
}