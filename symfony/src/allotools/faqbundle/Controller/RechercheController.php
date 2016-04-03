<?php

namespace Allotools\FaqBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class rechercheController extends Controller {

    public function searchAction()
    {

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            if ($this->getUser())
                $profilID = $this->getUser()->getProfil()->getId();

            $word = $this->get('request')->request->get('keywords');
            $em = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Categorie");

            if ($this->getUser())
                $categories = $em->findAllowedCategories($profilID, $word);
            else
                $categories = $em->findAllowedCategories(null, $word);

            $em = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Article");
            if ($this->getUser())
                $articles = $em->findAllowedArticles($profilID, $word);
            else
                $articles = $em->findAllowedArticles(null, $word);
            //var_dump($articles);
            if ($this->getUser())
                $arbres = $this->getDoctrine()->getRepository('AllotoolsFaqBundle:Arbre')->findAllOByLib($word, $profilID);
            else
                $arbres = $this->getDoctrine()->getRepository('AllotoolsFaqBundle:Arbre')->findAllOByLib($word, null);


            return $this->render('AllotoolsFaqBundle:Public/Recherche:index.html.twig'
                , array("articles" => $articles, "categories" => $categories, "arbres" => $arbres)
            );

        } else
            throw $this->createNotFoundException('Merci d\'insérer un mot clef ! ');
    }

} 