<?php

namespace Allotools\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AllotoolsUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
