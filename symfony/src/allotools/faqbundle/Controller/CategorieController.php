<?php

namespace Allotools\FaqBundle\Controller;

use Allotools\FaqBundle\Entity\Categorie;
use Allotools\FaqBundle\Form\CategorieEditType;
use Allotools\FaqBundle\Form\CategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CategorieController extends Controller
{
    public function displayCategoriesAction()
    {

        $om = $this->getDoctrine()->getManager("customer");
        /* @var $categ Categorie[] */
        $categ = $om->getRepository("AllotoolsFaqBundle:Categorie")->findAll();

        // On donne toutes les catégories à la vue qui va les afficher
        return $this->render('AllotoolsFaqBundle:Admin/Categories:affiche.html.twig',
            array("categories" => $categ));
    }

    public function addCategoryAction()
    {

        $categ = new Categorie();


        $form = $this->createForm(new CategorieType, $categ);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            //var_dump($categ->getProfil()->get(1)->getLibelle());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager("customer");
                if (!$this->doublon($categ)) {
                    $em->persist($categ);
                    $em->flush();

                    return $this->redirect($this->generateUrl('allotools_faq_manage_categories'));
                } else {
                    return $this->render('AllotoolsFaqBundle:Admin/Categories:ajoute.html.twig', array(
                        'form' => $form->createView()
                    ));
                }


            }
        }
        return $this->render('AllotoolsFaqBundle:Admin/Categories:ajoute.html.twig', array(
            'form' => $form->createView()
        ));

    }

    private function doublon(Categorie $categorie)
    {

        $emCategorie = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Categorie");
        /** @var Categorie $categoriedoublon */
        $categoriedoublon = $emCategorie->findOneBy(array("lib" => $categorie->getLib()));

        if (count($categoriedoublon) > 0 && $categoriedoublon->getId() != $categorie->getId()) {
            $this->get('session')->getFlashBag()->add(
                'erreur',
                'Ce libellé existe déjà !'
            );
            return true;
        } else {
            return false;
        }

    }

    public function editCategoryAction($id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getRepository("AllotoolsFaqBundle:Categorie");

        /* @var $categ Categorie */
        $categ = $em->findOneBy(array("id" => $id));
        $em = $doctrine->getManager("customer");

        $form = $this->createForm(new CategorieEditType, $categ);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                if (!$this->doublon($categ)) {
                    $em->persist($categ);
                    $em->flush();

                    return $this->redirect($this->generateUrl('allotools_faq_manage_categories'));
                } else {
                    return $this->render('AllotoolsFaqBundle:Admin/Categories:modifier.html.twig', array(
                        'form' => $form->createView()
                    ));
                }

            }
        }

        return $this->render('AllotoolsFaqBundle:Admin/Categories:modifier.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteCategoryAction($id)
    {

        $em = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Categorie");

        /* @var $categorie Categorie */
        $categorie = $em->findOneBy(array("id" => $id));

        $em = $this->getDoctrine()->getManager("customer");

        $em->remove($categorie);

        $em->flush();

        return $this->redirect($this->generateUrl('allotools_faq_manage_categories'));
    }

    /* PUBLIC */

    public function displayCategoryContentAction($route)
    {
        $em = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Categorie");
        if ($this->getUser())
            $articles = $em->getAllowedArticlesContent($this->getUser()->getProfil()->getId(), $route);
        else
            $articles = $em->getAllowedArticlesContent(null, $route);


        return $this->render('AllotoolsFaqBundle:Public/Affiche/Article/Liste:index.html.twig'
            , array("articles" => $articles)
        );
    }
} 