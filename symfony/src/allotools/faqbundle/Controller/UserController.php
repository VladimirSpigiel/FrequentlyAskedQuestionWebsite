<?php

namespace Allotools\FaqBundle\Controller;

use Allotools\UserBundle\Entity\User;
use Allotools\UserBundle\Form\UserEditType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{

    public function displayUsersAction()
    {
        $om = $this->getDoctrine()->getManager("customer");
        $utilisateurs = $om->getRepository("AllotoolsUserBundle:User")
            ->findAll();

        // On donne tous les utilisateurs à la vue qui va les affichers
        return $this->render('AllotoolsFaqBundle:Admin/User:affiche.html.twig',
            array("utilisateurs" => $utilisateurs));
    }

    public function editUserAction($id)
    {
        $em = $this->getDoctrine()->getRepository("AllotoolsUserBundle:User");

        /* @var $user User */
        $user = $em->find($id);

        // On récupère les données de l'user reçu
        // Et on envoie tout ça à la FORM
        $form = $this->createForm(new UserEditType, $user);

        //Lorsque le controleur intercepte un POST
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager("customer");
                if (!$this->doublon($user)) {
                    // On persiste l'user
                    $em->persist($user);
                    // On récupère son profil
                    if ($id != 1) {
                        $idProfil = $user->getProfil()->getId();
                        $emRQ = $em->getRepository('AllotoolsUserBundle:Profil');
                        $profils = $emRQ->find($idProfil);
                        // et ses roles
                        $roles = $profils->getRole();

                        //Puis on met à jour les roles de l'user
                        $user->setRoles($roles);
                    }
                    $em->flush();
                    // On redirige sur la page d'affichage des users
                    return $this->redirect($this->generateUrl('allotools_faq_manageusers'));
                } else {
                    return $this->render('AllotoolsFaqBundle:Admin/User:modifier.html.twig', array(
                        'form' => $form->createView()
                    ));
                }

            } else {
                die($form->getErrorsAsString());
            }
        }

        return $this->render('AllotoolsFaqBundle:Admin/User:modifier.html.twig', array(
            'form' => $form->createView()
        ));
    }

    private function doublon(User $user)
    {

        $emUser = $this->getDoctrine()->getRepository("AllotoolsUserBundle:User");
        /** @var User $userdoublon */
        $userdoublon = $emUser->findOneBy(array("username" => $user->getUsername()));

        if (count($userdoublon) > 0 && $userdoublon->getId() != $user->getId()) {
            $this->get('session')->getFlashBag()->add(
                'erreur',
                'Ce pseudo existe déjà !'
            );
            return true;
        } else {
            return false;
        }

    }

    public function deleteUserAction($id)
    {
        if ($id != 1) {
            $em = $this->getDoctrine()->getRepository("AllotoolsUserBundle:User");

            /* @var $users User */
            $user = $em->find($id);

            $em = $this->getDoctrine()->getManager("customer");

            $em->remove($user);

            $em->flush();
        }

        return $this->redirect($this->generateUrl('allotools_faq_manageusers'));
    }

} 