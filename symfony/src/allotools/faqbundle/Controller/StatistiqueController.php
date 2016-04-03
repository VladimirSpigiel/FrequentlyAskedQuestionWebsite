<?php
namespace Allotools\FaqBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Allotools\FaqBundle\Entity\Articleutile;

class StatistiqueController extends Controller
{

    public function statistiquesArticlesAction()
    {
        $om = $this->getDoctrine()->getManager("customer");
        $articleutiles = $om->getRepository("AllotoolsFaqBundle:Articleutile")->findAll();
        $annee = "Toutes les années";
        $date = new \DateTime('now');
        $anneeMax = $date->format('Y');
        $anneeMin = $date->format('Y');
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $annee = $request->get('annee');
        }
        $data = array("votes_positif" => 0,
            "votes_negatif" => 0,
            "votes" => 0,
            "vues" => 0,
            "anneeMax" => $anneeMax,
            "anneeMin" => $anneeMin,
            "annee" => $annee,
        );
        if ($annee == "Toutes les années") {
            foreach ($articleutiles as $articleutile) {
                $dateExplode = explode("-", $articleutile->getDate());
                $anneeAct = $dateExplode[1];
                if ($anneeAct < $anneeMin) {
                    $anneeMin = $anneeAct;
                }
                if ($articleutile->getUtile() == 1) {
                    $data['votes_positif'] = $data['votes_positif'] + $articleutile->getCompteur();
                    $data['votes'] = $data['votes'] + $articleutile->getCompteur();
                } elseif ($articleutile->getUtile() == 0) {
                    $data['votes_negatif'] = $data['votes_negatif'] + $articleutile->getCompteur();
                    $data['votes'] = $data['votes'] + $articleutile->getCompteur();
                } else {
                    $data['vues'] = $data['vues'] + $articleutile->getCompteur();

                }
            }
        } else {
            foreach ($articleutiles as $articleutile) {
                $dateExplode = explode("-", $articleutile->getDate());
                $anneeAct = $dateExplode[1];
                if ($anneeAct < $anneeMin) {
                    $anneeMin = $anneeAct;
                }
                if ($anneeAct == $annee) {
                    if ($articleutile->getUtile() == 1) {
                        $data['votes_positif'] = $data['votes_positif'] + $articleutile->getCompteur();
                        $data['votes'] = $data['votes'] + $articleutile->getCompteur();
                    } elseif ($articleutile->getUtile() == 0) {
                        $data['votes_negatif'] = $data['votes_negatif'] + $articleutile->getCompteur();
                        $data['votes'] = $data['votes'] + $articleutile->getCompteur();
                    } else {
                        $data['vues'] = $data['vues'] + $articleutile->getCompteur();

                    }
                }
            }

        }
        $data['anneeMin'] = $anneeMin;
        return $this->render('AllotoolsFaqBundle:Admin/Statistiques:index.html.twig',
            array("donnees" => $data));
    }


    public function statistiquesCategoriesAction()
    {
        $request = $this->get('request');
        $emCategorie = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Categorie");
        $categories = $emCategorie->findAll();
        $emArticleutile = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Articleutile");
        $emArticle = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Article");
        $emArticleutile->findAll();
        $date = new \DateTime('now');
        $anneeMax = $date->format('Y');
        $anneeMin = $date->format('Y');
        $vote_positif_arts = 0;
        $vote_negatif_arts = 0;
        $vues = 0;
        $annee = "Toutes les années";
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $annee = $request->get('annee');
        }

        if ($annee == "Toutes les années") {
            foreach ($categories as $categorie) {
                $categ[] = $categorie;
                $articleutiles = $emArticleutile->findarticleutilesByDateCateg($categorie->getRoute());



                foreach ($articleutiles as $articleutile) {
                    $dateExplode = explode("-", $articleutile->getDate());
                    $anneeAct = $dateExplode[1];
                    if ($anneeAct < $anneeMin) {
                        $anneeMin = $anneeAct;
                    }
                    if ($articleutile->getUtile() == 1) {
                        $vote_positif_arts += $articleutile->getCompteur();
                    } else if ($articleutile->getUtile() == 0) {
                        $vote_negatif_arts += $articleutile->getCompteur();
                    } else {
                        $vues += $articleutile->getCompteur();
                    }
                }

                $positif_categ[] = $vote_positif_arts;
                $negatif_categ[] = $vote_negatif_arts;
                $vue_categ[] = $vues;
                $vote_positif_arts = 0;
                $vote_negatif_arts = 0;
                $vues = 0;

            }
        } else {
            foreach ($categories as $categorie) {

                $categ[] = $categorie;

                $articleutiles = $emArticleutile->findarticleutilesByDateCateg($categorie->getRoute());

                foreach ($articleutiles as $articleutile) {
                    $dateExplode = explode("-", $articleutile->getDate());
                    $anneeAct = $dateExplode[1];
                    if ($anneeAct < $anneeMin) {
                        $anneeMin = $anneeAct;
                    }
                    if ($anneeAct == $annee) {
                        if ($articleutile->getUtile() == 1) {
                            $vote_positif_arts += $articleutile->getCompteur();
                        } else if ($articleutile->getUtile() == 0) {
                            $vote_negatif_arts += $articleutile->getCompteur();
                        } else {
                            $vues += $articleutile->getCompteur();
                        }
                    }
                }

                $positif_categ[] = $vote_positif_arts;
                $negatif_categ[] = $vote_negatif_arts;
                $vue_categ[] = $vues;
                $vote_positif_arts = 0;
                $vote_negatif_arts = 0;
                $vues = 0;
            }
        }
		
		//trier les tableaux pour l'avoir par nombre de vue decroissant

        $inversion = true; // Pour qu'il rentre dans la boucle au début
        $taille = count($vue_categ);
        for($i = 0; $inversion == true; $i++)
        {
            $inversion = false;
            for($j = 0; $j < $taille - 1 - $i; $j++)
            {
                if($vue_categ[$j] < $vue_categ[$j + 1])
                {
        // On indique qu'il y a eu une inversion et donc qu'il faudra repasser dans la boucle.
                            $inversion = true;
        // On inverse les cases $j et $j + 1
                            $tmp = $categ[$j];
                            $categ[$j] = $categ[$j + 1];
                            $categ[$j + 1] = $tmp;
                            $tmp = $vue_categ[$j];
                            $vue_categ[$j] = $vue_categ[$j + 1];
                            $vue_categ[$j + 1] = $tmp;
                            $tmp = $positif_categ[$j];
                            $positif_categ[$j] = $positif_categ[$j + 1];
                            $positif_categ[$j + 1] = $tmp;
                            $tmp = $negatif_categ[$j];
                            $negatif_categ[$j] = $negatif_categ[$j + 1];
                            $negatif_categ[$j + 1] = $tmp;


                }
            }
        }
		
        $data = array("categories" => $categ,
            "positifs" => $positif_categ,
            "negatifs" => $negatif_categ,
            "vues" => $vue_categ,
            "anneeMax" => $anneeMax,
            "anneeMin" => $anneeMin,
            "annee" => $annee);

        return $this->render('AllotoolsFaqBundle:Admin/Statistiques:categories.html.twig', $data);

    }

    public function statistiquesArticlesDansCategorieAction($route)
    {
        $emArticle = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Article");
        $emCategorie = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Categorie");
        $request = $this->get('request');
        $libelle = "";
        if ($request->getMethod() == 'POST') {
            $libelle = $request->get('libelle');
        }

        $articles = $emArticle->getArticlesLibelle($route, $libelle);

        $categorie = $emCategorie->findOneBy(array("route" => $route));

        return $this->render('AllotoolsFaqBundle:Admin/Statistiques:categories.articles.html.twig',
            array("articles" => $articles, "categorie" => $categorie));

    }

    public function  statistiquesArticlesDansCategorieAnneeAction($route, $article)
    {

        $articleutiles = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Articleutile")->getArticleUtilePourArticle($article);
        $article = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Article")->find($article);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $annee = $request->get('annee');
        } else {
            $date = new \DateTime('now');
            $annee = $date->format('Y');
        }


        $date = new \DateTime('now');
        $anneeMax = $date->format('Y');
        $anneeMin = $date->format('Y');

        //on initialise les tableaux
        for ($i = 1; $i <= 12; $i++) {
            $positif_categ[$i - 1] = 0; //remplis pour les + de chaque mois
            $negatif_categ[$i - 1] = 0;
            $vue_categ[$i - 1] = 0;
        }

        foreach ($articleutiles as $articleutile) {
            $dateExplode = explode("-", $articleutile->getDate());
            $anneeAct = $dateExplode[1];
            $moisAct = $dateExplode[0];
            if ($anneeAct < $anneeMin) {
                $anneeMin = $anneeAct;
            }


            if ($anneeAct == $annee) {
                for ($i = 1; $i <= 12; $i++) {
                    if ($moisAct == $i) {
                        if ($articleutile->getUtile() == 1) {
                            $positif_categ[$i - 1] = $positif_categ[$i - 1] + $articleutile->getCompteur();

                        } else if ($articleutile->getUtile() == 0) {
                            $negatif_categ[$i - 1] = $negatif_categ[$i - 1] + $articleutile->getCompteur();

                        } else {
                            $vue_categ[$i - 1] = $vue_categ[$i - 1] + $articleutile->getCompteur();
                        }
                    }
                }
            }
        }

        return $this->render('AllotoolsFaqBundle:Admin/Statistiques:categories.articles.annee.html.twig',
            array("route" => $route, "article" => $article, "positifs" => $positif_categ, "negatifs" => $negatif_categ, "vues" => $vue_categ, "annee" => $annee, "anneeMin" => $anneeMin, "anneeMax" => $anneeMax));
    }


    public function feedbackArticleAction($id, $bool)
    {

        $em = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Article");
        $om = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Articleutile");
        if ($this->getUser())
            $article = $em->getAllowedArticlesContent($this->getUser()->getProfil()->getId(), $id);
        else
            $article = $em->getAllowedArticlesContent(null, $id);

        // on rajoute un avi positif ou negatif pour l'article en cour
        $utile = 0;
        if ($bool == "true") {
            $utile = 1;
        }
        $date = new \DateTime('now');
        $dateForm = $date->format('m-Y');
        $articleutiles = $om->findBy(array("date" => $dateForm, "article" => $article[0], "utile" => $utile));
        if ($articleutiles == null) {
            $articleutile = new ArticleUtile();
            $articleutile->setDate($dateForm);
            $articleutile->setUtile($utile);
            $articleutile->setArticle($article[0]);
            $articleutile->setCompteur(1);
            $this->getDoctrine()->getManager('customer')->persist($articleutile);
        } else {
            $articleutiles[0]->setCompteur($articleutiles[0]->getCompteur() + 1);
            $this->getDoctrine()->getManager('customer')->persist($articleutiles[0]);
        }


        $this->getDoctrine()->getManager('customer')->flush();


        return $this->redirect($this->generateUrl("allotools_faq_homepage"));


    }

}