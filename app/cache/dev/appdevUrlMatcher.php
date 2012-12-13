<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/owner')) {
            // owner
            if (rtrim($pathinfo, '/') === '/owner') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'owner');
                }

                return array (  '_controller' => 'power\\genBundle\\Controller\\OwnerController::indexAction',  '_route' => 'owner',);
            }

            // owner_show
            if (preg_match('#^/owner/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\OwnerController::showAction',)), array('_route' => 'owner_show'));
            }

            // owner_new
            if ($pathinfo === '/owner/new') {
                return array (  '_controller' => 'power\\genBundle\\Controller\\OwnerController::newAction',  '_route' => 'owner_new',);
            }

            // owner_create
            if ($pathinfo === '/owner/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_owner_create;
                }

                return array (  '_controller' => 'power\\genBundle\\Controller\\OwnerController::createAction',  '_route' => 'owner_create',);
            }
            not_owner_create:

            // owner_edit
            if (preg_match('#^/owner/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\OwnerController::editAction',)), array('_route' => 'owner_edit'));
            }

            // owner_update
            if (preg_match('#^/owner/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_owner_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\OwnerController::updateAction',)), array('_route' => 'owner_update'));
            }
            not_owner_update:

            // owner_delete
            if (preg_match('#^/owner/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_owner_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\OwnerController::deleteAction',)), array('_route' => 'owner_delete'));
            }
            not_owner_delete:

        }

        if (0 === strpos($pathinfo, '/establishment')) {
            // establishment
            if (rtrim($pathinfo, '/') === '/establishment') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'establishment');
                }

                return array (  '_controller' => 'power\\genBundle\\Controller\\EstablishmentController::indexAction',  '_route' => 'establishment',);
            }

            // establishment_show
            if (preg_match('#^/establishment/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\EstablishmentController::showAction',)), array('_route' => 'establishment_show'));
            }

            // establishment_new
            if ($pathinfo === '/establishment/new') {
                return array (  '_controller' => 'power\\genBundle\\Controller\\EstablishmentController::newAction',  '_route' => 'establishment_new',);
            }

            // establishment_create
            if ($pathinfo === '/establishment/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_establishment_create;
                }

                return array (  '_controller' => 'power\\genBundle\\Controller\\EstablishmentController::createAction',  '_route' => 'establishment_create',);
            }
            not_establishment_create:

            // establishment_edit
            if (preg_match('#^/establishment/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\EstablishmentController::editAction',)), array('_route' => 'establishment_edit'));
            }

            // establishment_update
            if (preg_match('#^/establishment/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_establishment_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\EstablishmentController::updateAction',)), array('_route' => 'establishment_update'));
            }
            not_establishment_update:

            // establishment_delete
            if (preg_match('#^/establishment/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_establishment_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\EstablishmentController::deleteAction',)), array('_route' => 'establishment_delete'));
            }
            not_establishment_delete:

        }

        if (0 === strpos($pathinfo, '/transaction')) {
            // transaction
            if (rtrim($pathinfo, '/') === '/transaction') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'transaction');
                }

                return array (  '_controller' => 'power\\genBundle\\Controller\\TransactionController::indexAction',  '_route' => 'transaction',);
            }

            // transaction_show
            if (preg_match('#^/transaction/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\TransactionController::showAction',)), array('_route' => 'transaction_show'));
            }

            // transaction_new
            if ($pathinfo === '/transaction/new') {
                return array (  '_controller' => 'power\\genBundle\\Controller\\TransactionController::newAction',  '_route' => 'transaction_new',);
            }

            // transaction_create
            if ($pathinfo === '/transaction/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_transaction_create;
                }

                return array (  '_controller' => 'power\\genBundle\\Controller\\TransactionController::createAction',  '_route' => 'transaction_create',);
            }
            not_transaction_create:

            // transaction_edit
            if (preg_match('#^/transaction/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\TransactionController::editAction',)), array('_route' => 'transaction_edit'));
            }

            // transaction_update
            if (preg_match('#^/transaction/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_transaction_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\TransactionController::updateAction',)), array('_route' => 'transaction_update'));
            }
            not_transaction_update:

            // transaction_delete
            if (preg_match('#^/transaction/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_transaction_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\TransactionController::deleteAction',)), array('_route' => 'transaction_delete'));
            }
            not_transaction_delete:

        }

        if (0 === strpos($pathinfo, '/powerengine')) {
            // powerengine
            if (rtrim($pathinfo, '/') === '/powerengine') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'powerengine');
                }

                return array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineController::indexAction',  '_route' => 'powerengine',);
            }

            // powerengine_show
            if (preg_match('#^/powerengine/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineController::showAction',)), array('_route' => 'powerengine_show'));
            }

            // powerengine_new
            if ($pathinfo === '/powerengine/new') {
                return array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineController::newAction',  '_route' => 'powerengine_new',);
            }

            // powerengine_create
            if ($pathinfo === '/powerengine/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_powerengine_create;
                }

                return array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineController::createAction',  '_route' => 'powerengine_create',);
            }
            not_powerengine_create:

            // powerengine_edit
            if (preg_match('#^/powerengine/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineController::editAction',)), array('_route' => 'powerengine_edit'));
            }

            // powerengine_update
            if (preg_match('#^/powerengine/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_powerengine_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineController::updateAction',)), array('_route' => 'powerengine_update'));
            }
            not_powerengine_update:

            // powerengine_delete
            if (preg_match('#^/powerengine/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_powerengine_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineController::deleteAction',)), array('_route' => 'powerengine_delete'));
            }
            not_powerengine_delete:

        }

        if (0 === strpos($pathinfo, '/powerenginediesel')) {
            // powerenginediesel
            if (rtrim($pathinfo, '/') === '/powerenginediesel') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'powerenginediesel');
                }

                return array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineDieselController::indexAction',  '_route' => 'powerenginediesel',);
            }

            // powerenginediesel_show
            if (preg_match('#^/powerenginediesel/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineDieselController::showAction',)), array('_route' => 'powerenginediesel_show'));
            }

            // powerenginediesel_new
            if ($pathinfo === '/powerenginediesel/new') {
                return array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineDieselController::newAction',  '_route' => 'powerenginediesel_new',);
            }

            // powerenginediesel_create
            if ($pathinfo === '/powerenginediesel/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_powerenginediesel_create;
                }

                return array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineDieselController::createAction',  '_route' => 'powerenginediesel_create',);
            }
            not_powerenginediesel_create:

            // powerenginediesel_edit
            if (preg_match('#^/powerenginediesel/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineDieselController::editAction',)), array('_route' => 'powerenginediesel_edit'));
            }

            // powerenginediesel_update
            if (preg_match('#^/powerenginediesel/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_powerenginediesel_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineDieselController::updateAction',)), array('_route' => 'powerenginediesel_update'));
            }
            not_powerenginediesel_update:

            // powerenginediesel_delete
            if (preg_match('#^/powerenginediesel/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_powerenginediesel_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'power\\genBundle\\Controller\\PowerengineDieselController::deleteAction',)), array('_route' => 'powerenginediesel_delete'));
            }
            not_powerenginediesel_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
