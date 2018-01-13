<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // app_home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\FicheController::indexAction',  '_route' => 'app_home',);
        }

        if (0 === strpos($pathinfo, '/groupe')) {
            // app_groupe
            if (preg_match('#^/groupe(?P<id_groupe>\\d+)(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_groupe')), array (  '_controller' => 'AppBundle\\Controller\\FicheController::groupeAction',  'page' => 1,));
            }

            // app_fiche
            if (preg_match('#^/groupe(?P<id_groupe>\\d+)/fiche(?P<id_fiche>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_fiche')), array (  '_controller' => 'AppBundle\\Controller\\FicheController::ficheAction',));
            }

            // app_membre
            if (preg_match('#^/groupe(?P<id_groupe>\\d+)/membre$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_membre')), array (  '_controller' => 'AppBundle\\Controller\\FicheController::membreAction',));
            }

            // app_invite
            if (preg_match('#^/groupe(?P<id_groupe>\\d+)/invite$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_invite')), array (  '_controller' => 'AppBundle\\Controller\\FicheController::inviteAction',));
            }

        }

        // app_parametre
        if ('/parametre' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\FicheController::parametreAction',  '_route' => 'app_parametre',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
