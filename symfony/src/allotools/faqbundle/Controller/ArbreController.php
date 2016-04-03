<?php

namespace Allotools\FaqBundle\Controller;

use Allotools\FaqBundle\Entity\Arbre;
use Allotools\FaqBundle\Entity\Fils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class ArbreController extends Controller
{
    public function displayArbresAction()
    {

        $om = $this->getDoctrine()->getManager("customer");

        $abres = $om->getRepository("AllotoolsFaqBundle:Arbre")->findAll();


        return $this->render('AllotoolsFaqBundle:Admin/Arbres:affiche.html.twig',
            array("arbres" => $abres));
    }

    public function ajouteArbreAction()
    {

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $route = $this->get('request')->request->get('route');
            $question = $this->get('request')->request->get('question');
            $libelle = $this->get('request')->request->get('libelle');


            if (!$this->doublon($libelle, null)) {
                $om = $this->getDoctrine()->getManager("customer");
                $categorie = $om->getRepository("AllotoolsFaqBundle:Categorie")
                    ->findOneBy(array("route" => $route));

                $articles = $om->getRepository("AllotoolsFaqBundle:Categorie")
                    ->getAllowedArticlesContent($this->getUser()->getProfil()->getId(), $route);

                $questions = $om->getRepository("AllotoolsFaqBundle:Question")->findAll();

                $questionPrincipale = $om->getRepository("AllotoolsFaqBundle:Question")->findOneBy(array('id' => $question));


                return $this->render('AllotoolsFaqBundle:Admin/Arbres:construit.html.twig',
                    array("articles" => $articles, "questions" => $questions, "questionPrincipale" => $questionPrincipale, "libelle" => $libelle, "categorie" => $categorie));

            } else {
                $om = $this->getDoctrine()->getManager("customer");

                $categories = $om->getRepository("AllotoolsFaqBundle:Categorie")->findAll();
                $questions = $om->getRepository("AllotoolsFaqBundle:Question")->findAll();

                return $this->render('AllotoolsFaqBundle:Admin/Arbres:ajoute.html.twig',
                    array("categories" => $categories, "questions" => $questions));
            }
        } else {

            $om = $this->getDoctrine()->getManager("customer");

            $categories = $om->getRepository("AllotoolsFaqBundle:Categorie")->findAll();
            $questions = $om->getRepository("AllotoolsFaqBundle:Question")->findAll();

            return $this->render('AllotoolsFaqBundle:Admin/Arbres:ajoute.html.twig',
                array("categories" => $categories, "questions" => $questions));

        }
    }

    private function doublon($libelle, $id)
    {

        $emArbre = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Arbre");
        /** @var Arbre $arbredoublon */
        $arbredoublon = $emArbre->findOneBy(array("libelle" => $libelle));

        if (count($arbredoublon) > 0 && $arbredoublon->getId() != $id) {
            $this->get('session')->getFlashBag()->add(
                'erreur',
                'Ce libellé existe déjà !'
            );
            return true;
        } else {
            return false;
        }

    }

    public function construitArbreAction()
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $data = $this->get('request')->request->get('data');


            $em = $this->getDoctrine()->getManager("customer");

            $emCateg = $em->getRepository("AllotoolsFaqBundle:Categorie");
            $emArt = $em->getRepository("AllotoolsFaqBundle:Article");
            $emQuestion = $em->getRepository("AllotoolsFaqBundle:Question");

            $categ = $emCateg->find($data[0]["cat"]);

            /** @var  $arbre Arbre */
            $arbre = new Arbre();
            $arbre->setCategorie($categ);
            $arbre->setLibelle($data[0]["lib"]);
            $em->persist($arbre);
            $em->flush();

            /** @var $fils Fils[] */
            $fils = array();


            for ($i = 0; $i < count($data); $i++) {

                if ($data[$i]["type"] == "question" || $data[$i]["type"] == "init") {

                    $question = $emQuestion->find($data[$i]["id_etat"]);

                    $fils[$i] = new Fils();
                    $fils[$i]->setId($data[$i]["id_primary"]);
                    $fils[$i]->setArbre($arbre);
                    $fils[$i]->setQuestion($question);
                    $fils[$i]->setFilso($data[$i]["oui"]);
                    $fils[$i]->setFilsn($data[$i]["non"]);
                    $em->persist($fils[$i]);

                } else if ($data[$i]["type"] == "article") {

                    $article = $emArt->find($data[$i]["id_etat"]);

                    $fils[$i] = new Fils();
                    $fils[$i]->setId($data[$i]["id_primary"]);
                    $fils[$i]->setArbre($arbre);
                    $fils[$i]->setArticle($article);
                    $em->persist($fils[$i]);

                }
            }


            $em->flush();

            $data = array("valid" => true);
            $response = new Response(json_encode($data));
            return $response;
        } else
            throw $this->createNotFoundException('Merci de respecter la procédure pour créer un arbre');

    }

    public function reconstruitArbreAction()
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $data = $this->get('request')->request->get('data');
            $idArbre = $this->get('request')->request->get('arbre');


            $em = $this->getDoctrine()->getManager("customer");

            $emCateg = $em->getRepository("AllotoolsFaqBundle:Categorie");
            $emArt = $em->getRepository("AllotoolsFaqBundle:Article");
            $emArbre = $em->getRepository("AllotoolsFaqBundle:Arbre");
            $emQuestion = $em->getRepository("AllotoolsFaqBundle:Question");
            $emFils = $em->getRepository("AllotoolsFaqBundle:Fils");


            $categ = $emCateg->find($data[0]["cat"]);

            /** @var  $arbre Arbre */
            $arbre = $emArbre->findOneBy(array("id" => $idArbre));

            $arbre->setCategorie($categ);
            $arbre->setLibelle($data[0]["lib"]);
            $em->persist($arbre);

            $anciensFils = $emFils->findBy(array("arbre" => $idArbre));

            foreach ($anciensFils as $ancienFils) {
                $em->remove($ancienFils);
            }

            $em->flush();

            /** @var $fils Fils[] */
            $fils = array();


            for ($i = 0; $i < count($data); $i++) {

                if ($data[$i]["type"] == "question" || $data[$i]["type"] == "init") {

                    $question = $emQuestion->find($data[$i]["id_etat"]);

                    $fils[$i] = new Fils();
                    $fils[$i]->setId($data[$i]["id_primary"]);
                    $fils[$i]->setArbre($arbre);
                    $fils[$i]->setQuestion($question);
                    $fils[$i]->setFilso($data[$i]["oui"]);
                    $fils[$i]->setFilsn($data[$i]["non"]);
                    $em->persist($fils[$i]);

                } else if ($data[$i]["type"] == "article") {

                    $article = $emArt->find($data[$i]["id_etat"]);

                    $fils[$i] = new Fils();
                    $fils[$i]->setId($data[$i]["id_primary"]);
                    $fils[$i]->setArbre($arbre);
                    $fils[$i]->setArticle($article);
                    $em->persist($fils[$i]);

                }
            }

            $arbre->setActif(true);
            $em->flush();

            $data = array("valid" => true);
            $response = new Response(json_encode($data));
            return $response;
        } else
            throw $this->createNotFoundException('Merci de respecter la procédure pour modifier un arbre');

    }


    public function modifieArbreAction($id)
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {


            $fils = $this->getDoctrine()
                ->getManager("customer")
                ->getRepository("AllotoolsFaqBundle:Fils")
                ->findBy(array("arbre" => $id));

            $filsJSON = array(
                "id" => 0,
                "type" => null,
                "id-type" => null,
                "oui" => null,
                "non" => null);

            $return = array();


            foreach ($fils as $f) {
                if ($f->getQuestion() != null) {
                    $filsJSON["id"] = $f->getId();
                    $filsJSON["type"] = "question";
                    $filsJSON["id-type"] = $f->getQuestion()->getId();
                    $filsJSON["content-type"] = $f->getQuestion()->getLibelle();
                    $filsJSON["oui"] = $f->getFilso();
                    $filsJSON["non"] = $f->getFilsn();
                } else if ($f->getArticle() != null) {
                    $filsJSON["id"] = $f->getId();
                    $filsJSON["type"] = "article";
                    $filsJSON["id-type"] = $f->getArticle()->getId();
                    $filsJSON["content-type"] = $f->getArticle()->getTitre();
                    $filsJSON["oui"] = null;
                    $filsJSON["non"] = null;
                } else {
                    $filsJSON["id"] = $f->getId();
                    $filsJSON["type"] = "aucun";
                    $filsJSON["id-type"] = null;
                    $filsJSON["content-type"] = "AUCUN ARTICLE";
                    $filsJSON["oui"] = null;
                    $filsJSON["non"] = null;

                }
                $return[] = $filsJSON;
            }
            $route = $this->get('request')->request->get('route');
            $question = $this->get('request')->request->get('question');
            $libelle = $this->get('request')->request->get('libelle');

            if (!$this->doublon($libelle, $id)) {
                $om = $this->getDoctrine()->getManager("customer");
                $categorie = $om->getRepository("AllotoolsFaqBundle:Categorie")
                    ->findOneBy(array("route" => $route));

                $articles = $om->getRepository("AllotoolsFaqBundle:Categorie")
                    ->getAllowedArticlesContent($this->getUser()->getProfil()->getId(), $route);

                $questions = $om->getRepository("AllotoolsFaqBundle:Question")->findAll();

                $questionPrincipale = $om->getRepository("AllotoolsFaqBundle:Question")->findOneBy(array('id' => $question));


                $data = array("json" => json_encode($return),
                    "articles" => $articles,
                    "questions" => $questions,
                    "questionPrincipale" => $questionPrincipale,
                    "libelle" => $libelle,
                    "categorie" => $categorie,
                    "arbre" => $id);

                return $this->render('AllotoolsFaqBundle:Admin/Arbres:reconstruit.html.twig', $data);
            } else {
                $om = $this->getDoctrine()->getManager("customer");

                $categories = $om->getRepository("AllotoolsFaqBundle:Categorie")->findAll();
                $questions = $om->getRepository("AllotoolsFaqBundle:Question")->findAll();
                $arbre = $om->getRepository("AllotoolsFaqBundle:Arbre")->find($id);
                $fils = $om->getRepository("AllotoolsFaqBundle:Fils")->findOneBy(array("arbre" => $arbre, "id" => 0));


                return $this->render('AllotoolsFaqBundle:Admin/Arbres:modifie.html.twig',
                    array("categories" => $categories,
                        "questions" => $questions,
                        "arbre" => $arbre,
                        "fils" => $fils));
            }


        } else {

            $om = $this->getDoctrine()->getManager("customer");

            $categories = $om->getRepository("AllotoolsFaqBundle:Categorie")->findAll();
            $questions = $om->getRepository("AllotoolsFaqBundle:Question")->findAll();
            $arbre = $om->getRepository("AllotoolsFaqBundle:Arbre")->find($id);
            $fils = $om->getRepository("AllotoolsFaqBundle:Fils")->findOneBy(array("arbre" => $arbre, "id" => 0));


            return $this->render('AllotoolsFaqBundle:Admin/Arbres:modifie.html.twig',
                array("categories" => $categories,
                    "questions" => $questions,
                    "arbre" => $arbre,
                    "fils" => $fils));

        }
    }


    public function supprimeArbreAction($id)
    {
        $em = $this->getDoctrine()->getManager("customer");
        $arbre = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Arbre")
            ->find($id);
        if ($arbre != null) {
            $fils = $em->getRepository("AllotoolsFaqBundle:Fils")->findBy(array("arbre" => $id));
            foreach ($fils as $f) {
                $em->remove($f);
            }

            $em->remove($arbre);
            $em->flush();
            return $this->redirect($this->generateUrl("allotools_faq_manage_arbres"));
        } else {
            throw $this->createNotFoundException("Cet arbre n'existe pas ...");
        }

    }

    /* PUBLIC */
    public function afficheQuestionAction($id)
    {
        // ID = idArbre
        $em = $this->getDoctrine()->getManager("customer")->getRepository("AllotoolsFaqBundle:Arbre");
        /* @var Arbre $arbre */
        $arbre = $em->find($id);
        $arbre->setNbVue($arbre->getNbVue() + 1);
        $this->getDoctrine()->getManager('customer')->flush();

        $em = $this->getDoctrine()->getManager("customer")->getRepository("AllotoolsFaqBundle:Fils");

        $feuille = $em->findOneBy(array('arbre' => $id, 'id' => 0));
        //$feuille = $em->test($id);

        $libelle = $feuille->getQuestion()->getLibelle();

        $fils = $feuille->getId();

        return $this->render('AllotoolsFaqBundle:Public/Recherche/Arbre:afficheQuestion.html.twig',
            array("libelle" => $libelle, "fils" => $fils, "arbre" => $id));
    }

    public function boucleRechercheAction($idFils, $reponse, $idArbre)
    {

        $em = $this->getDoctrine()->getManager("customer")->getRepository("AllotoolsFaqBundle:Fils");
        $fils = $em->findOneBy(array('arbre' => $idArbre, 'id' => $idFils));

        if ($reponse == 'oui') {

            $nouveauFils = $em->findOneBy(array('arbre' => $idArbre, 'id' => $fils->getFilso()));

        } else {
            $nouveauFils = $em->findOneBy(array('arbre' => $idArbre, 'id' => $fils->getFilsn()));
        }


        if ($nouveauFils->getQuestion() == null) {
            $article = $nouveauFils->getArticle();
            return $this->render('AllotoolsFaqBundle:Public/Affiche/Article/Contenu:index.html.twig',
                array("article" => $article));
        } else {
            $libelle = $nouveauFils->getQuestion()->getLibelle();
            $fils = $nouveauFils->getId();
            return $this->render('AllotoolsFaqBundle:Public/Recherche/Arbre:afficheQuestion.html.twig',
                array("libelle" => $libelle, "fils" => $fils, "arbre" => $idArbre));
        }

    }
} 