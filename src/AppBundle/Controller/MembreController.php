<?php

namespace AppBundle\Controller;

use App\AppBundle\Entity\Fiche;
use App\AppBundle\Entity\Groupe;
use App\AppBundle\Entity\Membre;
use App\AppBundle\Entity\Ressource;
use App\AppBundle\Entity\Tag;
use App\AppBundle\Entity\Commentaire;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class MembreController extends Controller
{
    public function indexAction($id_groupe)
    {
        $em = $this->getDoctrine()->getManager();

        $membre = $em
            ->getRepository('AppBundle:Membre')
            ->findOneBy(array(
                'user'   => $this->getUser(),
                'groupe' => $id_groupe,
            ));
        
        if ($membre === null || !$membre->hasRole('ROLE_USER')) {
            throw new AccessDeniedException();
        }

        $groupe  = $em
            ->getRepository('AppBundle:Groupe')
            ->find($id_groupe);

        $membres = $groupe->getMembre();

        return $this->render('AppBundle:Membre:index.html.twig', array(
            'groupe'  => $groupe,
            'membres' => $membres,
        ));
    }
}
