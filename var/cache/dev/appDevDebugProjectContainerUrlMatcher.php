<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/c91f9fa')) {
            // _assetic_c91f9fa
            if ($pathinfo === '/css/c91f9fa.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c91f9fa',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c91f9fa',);
            }

            // _assetic_c91f9fa_0
            if ($pathinfo === '/css/c91f9fa_demo_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c91f9fa',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c91f9fa_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
