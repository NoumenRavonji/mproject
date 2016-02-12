<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'misa_mproject' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\MprojectController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assignation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_mproject_assign' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\MprojectController::assignProjectAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mproject/assign',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_project_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\ProjectController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_project_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\ProjectController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/project/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_project_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\ProjectController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/project/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_project_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\ProjectController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/project/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_project_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\ProjectController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/project/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_client_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\ClientController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_client_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\ClientController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_client_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\ClientController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_client_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\ClientController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_client_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\ClientController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_developer_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\DeveloperController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/developer/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_developer_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\DeveloperController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/developer/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_developer_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\DeveloperController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/developer/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_developer_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\DeveloperController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/developer/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'misa_developer_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MISA\\MprojectBundle\\Controller\\DeveloperController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/developer/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
