<?php

namespace Allotools\FaqBundle\Controller;

use Allotools\FaqBundle\Entity\Article;
use Allotools\FaqBundle\Form\ArticleEditType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    public function displayArticlesAction()
    {

        $om = $this->getDoctrine()->getManager("customer");
        /* @var $categ Categorie[] */
        $art = $om->getRepository("AllotoolsFaqBundle:Article")->findAll();

        // On donne toutes les catégories à la vue qui va les afficher
        return $this->render('AllotoolsFaqBundle:Admin/Articles:affiche.html.twig',
            array("articles" => $art));
    }

    public function editArticleAction($id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getRepository("AllotoolsFaqBundle:Article");

        /* @var $art Article */
        $art = $em->findOneBy(array("id" => $id));
        $em = $doctrine->getManager("customer");

        $form = $this->createForm(new ArticleEditType, $art);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                //$em->merge($categ);
                $em->persist($art);
                $em->flush();

                return $this->redirect($this->generateUrl('allotools_faq_manage_articles'));
            }
        }

        return $this->render('AllotoolsFaqBundle:Admin/Articles:modifier.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /* PUBLIC */

    public function displayArticleContentAction($id)
    {
        $em = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Article");


        if ($this->getUser())
            $article = $em->getAllowedArticlesContent($this->getUser()->getProfil()->getId(), $id);
        else
            $article = $em->getAllowedArticlesContent(null, $id);

        if ($article == null) {
            return $this->render('AllotoolsFaqBundle:Public/Affiche/Article/Contenu:index.html.twig'
                , array("article" => null)
            );
        } else {

            //# on ajoute une vue pour l'article
            $em = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Articleutile");

            $date = new \DateTime('now');
            $dateForm = $date->format('m-Y');
            $articleutiles = $em->findBy(array("date" => $dateForm, "article" => $article, "utile" => 2));

            if ($articleutiles == null) {
                $articleutile = new ArticleUtile();
                $articleutile->setDate($dateForm);
                $articleutile->setUtile(2);
                $articleutile->setArticle($article[0]);
                $articleutile->setCompteur(1);
                $this->getDoctrine()->getManager('customer')->persist($articleutile);
            } else {
                $articleutiles[0]->setCompteur($articleutiles[0]->getCompteur() + 1);
                $this->getDoctrine()->getManager('customer')->persist($articleutiles[0]);
            }


            $this->getDoctrine()->getManager('customer')->flush();
        }
        return $this->render('AllotoolsFaqBundle:Public/Affiche/Article/Contenu:index.html.twig'
            , array("article" => $article[0])
        );
    }
} 