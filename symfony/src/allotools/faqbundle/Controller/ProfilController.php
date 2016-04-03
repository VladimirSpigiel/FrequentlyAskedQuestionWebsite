<?php

namespace Allotools\FaqBundle\Controller;

use Allotools\UserBundle\Entity\Profil;
use Allotools\UserBundle\Form\ProfilEditType;
use Allotools\UserBundle\Form\ProfilType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfilController extends Controller
{

    public function displayProfilesAction()
    {
        $om = $this->getDoctrine()->getManager("customer");
        $profiles = $om->getRepository("AllotoolsUserBundle:Profil")
            ->findAll();

        return $this->render('AllotoolsFaqBundle:Admin/Profiles:affiche.html.twig',
            array("profils" => $profiles));
    }

    public function addProfileAction()
    {

        $profil = new Profil();


        $form = $this->createForm(new ProfilType, $profil);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager("customer");

                if (!$this->doublon($profil)) {
                    $em->persist($profil);
                    $em->flush();
                    return $this->redirect($this->generateUrl('allotools_faq_manageprofiles'));

                } else {
                    return $this->render('AllotoolsFaqBundle:Admin/Profiles:ajoute.html.twig', array(
                        'form' => $form->createView()
                    ));
                }
            }
        }

        return $this->render('AllotoolsFaqBundle:Admin/Profiles:ajoute.html.twig', array(
            'form' => $form->createView()
        ));
    }

    private function doublon(Profil $profil)
    {

        $emProfil = $this->getDoctrine()->getRepository("AllotoolsUserBundle:Profil");
        /** @var Profil $profildoublon */
        $profildoublon = $emProfil->findOneBy(array("libelle" => $profil->getLibelle()));

        if (count($profildoublon) > 0 && $profildoublon->getId() != $profil->getId()) {
            $this->get('session')->getFlashBag()->add(
                'erreur',
                'Ce libellé existe déjà !'
            );
            return true;
        } else {
            return false;
        }

    }

    public function editProfileAction($id)
    {

        $em = $this->getDoctrine()->getRepository("AllotoolsUserBundle:Profil");

        /* @var $profil Profil */
        $profil = $em->find($id);


        $form = $this->createForm(new ProfilEditType, $profil);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager("customer");

                /* METTRE A JOUR LES UTILISATEURS UTILISANT CE PROFIL */
                if ($this->doublon($profil)) {
                    return $this->render('AllotoolsFaqBundle:Admin/Profiles:modifier.html.twig', array(
                        'form' => $form->createView()
                    ));
                } else {
                    $em_maj_users = $this->getDoctrine()->getRepository("AllotoolsUserBundle:User");

                    $users = $em_maj_users->findBy(array("profil" => $profil->getId()));

                    /* @var $user User */

                    foreach ($users as $user) {
                        $user->setRoles($profil->getRole());
                        $em->persist($user);
                    }

                    /* FIN DE MAJ UTILISATEURS */

                    $em->persist($profil);
                    $em->flush();

                    return $this->redirect($this->generateUrl('allotools_faq_manageprofiles'));
                }

            }
        }

        return $this->render('AllotoolsFaqBundle:Admin/Profiles:modifier.html.twig', array(
            'form' => $form->createView()
        ));
    }


    public function deleteProfileAction($id)
    {

        $em = $this->getDoctrine()->getRepository("AllotoolsUserBundle:Profil");

        $em_maj_users = $this->getDoctrine()->getRepository("AllotoolsUserBundle:User");

        /* @var $profil Profil */
        $profil = $em->find($id);

        /* METTRE A JOUR LES UTILISATEURS UTILISANT CE PROFIL */
        $users = $em_maj_users->findBy(array("profil" => $id));

        $em = $this->getDoctrine()->getManager("customer");
        /* @var $user User */
        foreach ($users as $user) {
            if ($user->getId() != 1)
                $user->setRoles(array());
            $em->persist($user);
        }
        /* FIN DE MAJ UTILISATEURS */

        $em->remove($profil);

        $em->flush();

        return $this->redirect($this->generateUrl('allotools_faq_manageprofiles'));
    }

} 