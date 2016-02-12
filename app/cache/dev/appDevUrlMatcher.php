<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // misa_mproject
        if ($pathinfo === '/assignation') {
            return array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\MprojectController::indexAction',  '_route' => 'misa_mproject',);
        }

        // misa_mproject_assign
        if ($pathinfo === '/mproject/assign') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_misa_mproject_assign;
            }

            return array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\MprojectController::assignProjectAction',  '_route' => 'misa_mproject_assign',);
        }
        not_misa_mproject_assign:

        // misa_project_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'misa_project_homepage');
            }

            return array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\ProjectController::indexAction',  '_route' => 'misa_project_homepage',);
        }

        if (0 === strpos($pathinfo, '/project')) {
            // misa_project_add
            if ($pathinfo === '/project/add') {
                return array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\ProjectController::addAction',  '_route' => 'misa_project_add',);
            }

            // misa_project_view
            if (0 === strpos($pathinfo, '/project/view') && preg_match('#^/project/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'misa_project_view')), array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\ProjectController::viewAction',));
            }

            // misa_project_edit
            if (0 === strpos($pathinfo, '/project/edit') && preg_match('#^/project/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'misa_project_edit')), array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\ProjectController::editAction',));
            }

            // misa_project_delete
            if (0 === strpos($pathinfo, '/project/delete') && preg_match('#^/project/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'misa_project_delete')), array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\ProjectController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/client')) {
            // misa_client_homepage
            if (rtrim($pathinfo, '/') === '/client') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'misa_client_homepage');
                }

                return array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\ClientController::indexAction',  '_route' => 'misa_client_homepage',);
            }

            // misa_client_add
            if ($pathinfo === '/client/add') {
                return array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\ClientController::addAction',  '_route' => 'misa_client_add',);
            }

            // misa_client_view
            if (0 === strpos($pathinfo, '/client/view') && preg_match('#^/client/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'misa_client_view')), array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\ClientController::viewAction',));
            }

            // misa_client_edit
            if (0 === strpos($pathinfo, '/client/edit') && preg_match('#^/client/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'misa_client_edit')), array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\ClientController::editAction',));
            }

            // misa_client_delete
            if (0 === strpos($pathinfo, '/client/delete') && preg_match('#^/client/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'misa_client_delete')), array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\ClientController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/developer')) {
            // misa_developer_homepage
            if (rtrim($pathinfo, '/') === '/developer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'misa_developer_homepage');
                }

                return array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\DeveloperController::indexAction',  '_route' => 'misa_developer_homepage',);
            }

            // misa_developer_add
            if ($pathinfo === '/developer/add') {
                return array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\DeveloperController::addAction',  '_route' => 'misa_developer_add',);
            }

            // misa_developer_view
            if (0 === strpos($pathinfo, '/developer/view') && preg_match('#^/developer/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'misa_developer_view')), array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\DeveloperController::viewAction',));
            }

            // misa_developer_edit
            if (0 === strpos($pathinfo, '/developer/edit') && preg_match('#^/developer/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'misa_developer_edit')), array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\DeveloperController::editAction',));
            }

            // misa_developer_delete
            if (0 === strpos($pathinfo, '/developer/delete') && preg_match('#^/developer/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'misa_developer_delete')), array (  '_controller' => 'MISA\\MprojectBundle\\Controller\\DeveloperController::deleteAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
