<?php

namespace MISA\MprojectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MISAMprojectBundle:Default:index.html.twig', array('name' => $name));
    }
}
