<?php

namespace GroupeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class MembreController extends Controller
{
    public function indexAction(Request $request, $groupeId)
    {
        try {
            $em = $this->getDoctrine()->getManager();

            $membre = $em
                ->getRepository('GroupeBundle:Membre')
                ->findOneBy(array(
                    'user'   => $this->getUser(),
                    'groupe' => $groupeId,
                ));
            
            if ($this->get('app.role_validator')->roleUser($membre)) {
                throw new AccessDeniedException('Vous n\'avez pas accès à la liste de membre de ce groupe.');
            }

            // get groupe left join membres
            $groupe = $em
                ->getRepository('GroupeBundle:Groupe')
                ->getGroupeMembres($groupeId);

            if ($groupe === null) {
                throw new NotFoundHttpException('Ce groupe n\'existe pas.');
            }

            $membres = $groupe->getMembre();

            $form = $this->createForm('GroupeBundle\Form\MembreType', $membre);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid() && $membre->hasRole('ROLE_ADMIN')) {
                $id = $form->get('id')->getData();

                $membreEdit = $em
                    ->getRepository('GroupeBundle:Membre')
                    ->findOneBy(array(
                        'user'   => $id,
                        'groupe' => $groupeId,
                    ));

                // manager
                $membreEdit->setRoles(array(''));

                if ($form->get('edit')->getData()) {
                    $membreEdit->addRole('ROLE_EDIT');
                }
                if ($form->get('invite')->getData()) {
                    $membreEdit->addRole('ROLE_INVITE');
                }
                if ($form->get('post')->getData()) {
                    $membreEdit->addRole('ROLE_POST');   
                }
                if ($form->get('ressource')->getData()) {
                    $membreEdit->addRole('ROLE_RESSOURCE');
                }

                $em->persist($membreEdit);
                $em->flush();

                return $this->render('GroupeBundle:Membre:index.html.twig', array(
                    'groupe'     => $groupe,
                    'membres'    => $membres,
                    'currMembre' => $membre,
                    'form'       => $form->createView(),
                ));
            }

            return $this->render('GroupeBundle:Membre:index.html.twig', array(
                'groupe'     => $groupe,
                'membres'    => $membres,
                'currMembre' => $membre,
                'form'       => $form->createView(),
            ));
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

            return $this->redirectToRoute('app_home');
        } catch (AccessDeniedException $e) {
            $this->get('session')->getFlashBag()->add('danger', $e->getMessage());

            return $this->redirectToRoute('app_home');
        }
    }
}
