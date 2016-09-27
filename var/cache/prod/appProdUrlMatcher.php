<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // hello_the_world
        if ($pathinfo === '/hello-world') {
            return array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\AdvertController::indexAction',  '_route' => 'hello_the_world',);
        }

        if (0 === strpos($pathinfo, '/platform')) {
            // esiea_platform_home
            if ($pathinfo === '/platform') {
                return array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\AdvertController::indexAction',  '_route' => 'esiea_platform_home',);
            }

            // esiea_platform_view
            if (0 === strpos($pathinfo, '/platform/advert') && preg_match('#^/platform/advert/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_platform_view')), array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\AdvertController::viewAction',));
            }

            // esiea_platform_view_slug
            if (preg_match('#^/platform/(?P<year>[^/]++)/(?P<slug>[^/\\.]++)\\.(?P<format>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_platform_view_slug')), array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\AdvertController::viewSlugAction',));
            }

            // esiea_platform_add
            if ($pathinfo === '/platform/add') {
                return array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\AdvertController::addAction',  '_route' => 'esiea_platform_add',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
