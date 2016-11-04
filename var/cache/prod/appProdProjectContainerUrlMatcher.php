<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/platform')) {
            // esiea_platform_home
            if (preg_match('#^/platform(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_platform_home')), array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\AdvertController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/platform/ad')) {
                // esiea_platform_view
                if (0 === strpos($pathinfo, '/platform/advert') && preg_match('#^/platform/advert/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_platform_view')), array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\AdvertController::viewAction',));
                }

                // esiea_platform_add
                if ($pathinfo === '/platform/add') {
                    return array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\AdvertController::addAction',  '_route' => 'esiea_platform_add',);
                }

            }

            // esiea_platform_edit
            if (0 === strpos($pathinfo, '/platform/edit') && preg_match('#^/platform/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_platform_edit')), array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\AdvertController::editAction',));
            }

            // esiea_platform_delete
            if (0 === strpos($pathinfo, '/platform/delete') && preg_match('#^/platform/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_platform_delete')), array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\AdvertController::deleteAction',));
            }

            // esiea_platform_header
            if ($pathinfo === '/platform/header') {
                return array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\SiteController::headerAction',  '_route' => 'esiea_platform_header',);
            }

            // esiea_platform_faq
            if ($pathinfo === '/platform/faq') {
                return array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\SiteController::faqAction',  '_route' => 'esiea_platform_faq',);
            }

            // esiea_platform_delivery
            if (rtrim($pathinfo, '/') === '/platform/delivery') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'esiea_platform_delivery');
                }

                return array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\SiteController::deliveryAction',  '_route' => 'esiea_platform_delivery',);
            }

            // esiea_platform_payment
            if (rtrim($pathinfo, '/') === '/platform/payment') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'esiea_platform_payment');
                }

                return array (  '_controller' => 'ESIEA\\PlatformBundle\\Controller\\SiteController::paymentAction',  '_route' => 'esiea_platform_payment',);
            }

        }

        // esiea_core_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esiea_core_home');
            }

            return array (  '_controller' => 'ESIEA\\CoreBundle\\Controller\\CoreController::indexAction',  '_route' => 'esiea_core_home',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
