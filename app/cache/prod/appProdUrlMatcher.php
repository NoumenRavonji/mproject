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
