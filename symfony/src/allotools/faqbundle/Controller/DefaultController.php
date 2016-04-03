<?php

namespace Allotools\FaqBundle\Controller;

use Allotools\FaqBundle\Entity\Arbre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Arbre");
        if ($this->getUser() && $this->getUser()->getProfil()) {
            $id_profil = $this->getUser()->getProfil()->getId();
        } else {
            $id_profil = null;
        }

        /* @var $arbres Arbre[] */
        if ($this->getUser()) {
            $arbres = $em->getTop5AllowedArbres($id_profil);
        } else {
            $arbres = $em->getTop5AllowedArbres(null);
        }

        // On donne les 5 arbres les plus consultés à la page d'accueil
        return $this->render('AllotoolsFaqBundle:Public:index.html.twig',
            array("arbres" => $arbres));
    }
}