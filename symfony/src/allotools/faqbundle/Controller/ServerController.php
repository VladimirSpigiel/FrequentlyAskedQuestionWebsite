<?php

namespace Allotools\FaqBundle\Controller;

use Allotools\FaqBundle\Entity\Server;
use Allotools\FaqBundle\Form\ServerEditType;
use Allotools\FaqBundle\Form\ServerType;
use Allotools\FaqBundle\Services\ServiceMaj;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ServerController extends Controller
{
    public function updateAllArticlesAction()
    {
        $objectManager = $this->getDoctrine()->getManager("customer");
        $nb_changes = ServiceMaj::updateAll($objectManager);
        $nbArbreInactif = 0;
        $arbres = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Arbre")->findAll();
        $fils = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Fils")->findFilsInactif();
        $fils2 = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Fils")->findFilsArticleInactif();
        $tabArbre = array();
        foreach ($fils2 as $filsAct) {
            $trouve = false;
            foreach ($tabArbre as $tabArbreAct) {
                if ($tabArbreAct->getId() == ($filsAct->getArbre()->getId())) {
                    $trouve = true;
                }
            }
            if ($trouve == false) {
                $tabArbre[] = $filsAct->getArbre();
            }
        }
        foreach ($fils as $filsAct) {
            $trouve = false;
            foreach ($tabArbre as $tabArbreAct) {
                if ($tabArbreAct->getId() == $filsAct->getArbre()->getId()) {
                    $trouve = true;
                }
            }
            if ($trouve == false) {
                $tabArbre[] = $filsAct->getArbre();
            }
        }
        //on desactive les arbres qui ont besoin de l'etre
        foreach ($tabArbre as $arbre) {
            $arbre->setActif(false);
            $nbArbreInactif = $nbArbreInactif + 1;
            $this->getDoctrine()->getManager('customer')->persist($arbre);
        }
        //on reactive les arbres qui ont besoin de l'etre
        foreach ($arbres as $arbreAct) {
            $trouve = false;
            foreach ($tabArbre as $arbre) {
                if ($arbre->getId() == $arbreAct->getId()) {
                    $trouve = true;
                }
            }
            if ($trouve == false) {
                $arbreAct->setActif(true);
                $this->getDoctrine()->getManager('customer')->persist($arbreAct);
            }
        }
        $this->getDoctrine()->getManager('customer')->flush();
        return $this->render('AllotoolsFaqBundle:Admin/Servers:updateAllArticles.html.twig', array('nb_changes' => $nb_changes, 'nbArbreInactif' => $nbArbreInactif));
    }

    public function displayServersAction()
    {
        $om = $this->getDoctrine()->getManager("customer");
        $servers = $om->getRepository("AllotoolsFaqBundle:Server")
            ->findAll();
        // On donne tous les servers à la vue qui va les affichers
        return $this->render('AllotoolsFaqBundle:Admin/Servers:affiche.html.twig',
            array("serveurs" => $servers));
    }

    public function addServerAction()
    {
        $server = new Server();
        $form = $this->createForm(new ServerType, $server);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager("customer");
                if (!$this->doublon($server)) {
                    $em->persist($server);
                    $em->flush();
                    return $this->redirect($this->generateUrl('allotools_faq_manageservers'));
                } else {
                    return $this->render('AllotoolsFaqBundle:Admin/Servers:ajoute.html.twig', array(
                        'form' => $form->createView()
                    ));
                }
            }
        }
        return $this->render('AllotoolsFaqBundle:Admin/Servers:ajoute.html.twig', array(
            'form' => $form->createView()
        ));
    }

    private function doublon(Server $server)
    {
        $emServer = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Server");
        /** @var Server $serverdoublon */
        $serverdoublon = $emServer->findOneBy(array("lib" => $server->getLib()));
        if (count($serverdoublon) > 0 && $serverdoublon->getId() != $server->getId()) {
            $this->get('session')->getFlashBag()->add(
                'erreur',
                'Ce libellé existe déjà !'
            );
            return true;
        } else {
            return false;
        }
    }

    public function editServerAction($id)
    {
        $em = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Server");
        /* @var $server Server */
        $server = $em->find($id);
        $form = $this->createForm(new ServerEditType, $server);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager("customer");
                if (!$this->doublon($server)) {
                    $em->persist($server);
                    $em->flush();
                    return $this->redirect($this->generateUrl('allotools_faq_manageservers'));
                } else {
                    return $this->render('AllotoolsFaqBundle:Admin/Servers:modifier.html.twig', array(
                        'form' => $form->createView()
                    ));
                }
            }
        }
    }

    public function deleteServerAction($id)
    {

        $em = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Server");

        /* @var $server Server */
        $server = $em->find($id);

        $em = $this->getDoctrine()->getManager("customer");

        $em->remove($server);

        $em->flush();

        $arbres = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Arbre")->findAll();
        $fils = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Fils")->findFilsInactif();
        $fils2 = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Fils")->findFilsArticleInactif();
        $tabArbre = array();
        foreach ($fils2 as $filsAct) {
            $trouve = false;
            foreach ($tabArbre as $tabArbreAct) {
                if ($tabArbreAct->getId() == $filsAct->getArbre()->getId()) {
                    $trouve = true;
                }
            }
            if ($trouve == false) {
                $tabArbre[] = $filsAct->getArbre();
            }
        }

        foreach ($fils as $filsAct) {
            $trouve = false;
            foreach ($tabArbre as $tabArbreAct) {
                if ($tabArbreAct->getId() == $filsAct->getArbre()->getId()) {
                    $trouve = true;
                }
            }
            if ($trouve == false) {
                $tabArbre[] = $filsAct->getArbre();
            }
        }
        //on désactive les arbres qui ont besoin de l'être
        foreach ($tabArbre as $arbre) {
            $arbre->setActif(false);
            $this->getDoctrine()->getManager('customer')->persist($arbre);
        }

        //on réactive les arbres qui ont besoin de l'être
        foreach ($arbres as $arbreAct) {
            $trouve = false;
            foreach ($tabArbre as $arbre) {
                if ($arbre->getId() == $arbreAct->getId()) {
                    $trouve = true;
                }
            }
            if ($trouve == false) {
                $arbreAct->setActif(true);
                $this->getDoctrine()->getManager('customer')->persist($arbreAct);
            }
        }
        $this->getDoctrine()->getManager('customer')->flush();
        return $this->redirect($this->generateUrl('allotools_faq_manageservers'));
    }


    public function updateServerAction($id)
    {

        $em = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Server");
        /* @var $server Server */
        $server = $em->find($id);
        $objectManager = $this->getDoctrine()->getManager("customer");
        $nb_changes = ServiceMaj::updateOne($objectManager, $server);
        $nbArbreInactif = 0;
        $arbres = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Arbre")->findAll();
        $fils = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Fils")->findFilsInactif();

        $fils2 = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Fils")->findFilsArticleInactif();


        $tabArbre = array();
        foreach ($fils2 as $filsAct) {
            $trouve = false;
            foreach ($tabArbre as $tabArbreAct) {
                if ($tabArbreAct->getId() == $filsAct->getArbre()->getId()) {
                    $trouve = true;
                }
            }
            if ($trouve == false) {
                $tabArbre[] = $filsAct->getArbre();
            }
        }

        foreach ($fils as $filsAct) {
            $trouve = false;
            foreach ($tabArbre as $tabArbreAct) {
                if ($tabArbreAct->getId() == $filsAct->getArbre()->getId()) {
                    $trouve = true;
                }
            }
            if ($trouve == false) {
                $tabArbre[] = $filsAct->getArbre();
            }
        }
        //on desactive les arbres qui ont besoin de l'etre
        foreach ($tabArbre as $arbre) {
            $arbre->setActif(false);
            $nbArbreInactif = $nbArbreInactif + 1;
            $this->getDoctrine()->getManager('customer')->persist($arbre);
        }

        //on reactive les arbres qui ont besoin de l'etre
        foreach ($arbres as $arbreAct) {
            $trouve = false;
            foreach ($tabArbre as $arbre) {
                if ($arbre->getId() == $arbreAct->getId()) {
                    $trouve = true;
                }

            }
            if ($trouve == false) {
                $arbreAct->setActif(true);
                $this->getDoctrine()->getManager('customer')->persist($arbreAct);
            }

        }

        $this->getDoctrine()->getManager('customer')->flush();
        //modifier les arbres au besoin
        return $this->render('AllotoolsFaqBundle:Admin/Servers:updateAllArticles.html.twig', array('nb_changes' => $nb_changes, 'nbArbreInactif' => $nbArbreInactif));
    }
}