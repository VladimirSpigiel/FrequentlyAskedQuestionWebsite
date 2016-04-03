<?php

namespace Allotools\FaqBundle\Controller;

use Proxies\__CG__\Allotools\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('AllotoolsFaqBundle:Admin:index.html.twig');
    }
}
