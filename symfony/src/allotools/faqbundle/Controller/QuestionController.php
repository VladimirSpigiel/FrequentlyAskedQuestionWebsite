<?php

namespace Allotools\FaqBundle\Controller;

use Allotools\FaqBundle\Entity\Question;
use Allotools\FaqBundle\Form\QuestionEditType;
use Allotools\FaqBundle\Form\QuestionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuestionController extends Controller
{

    public function displayQuestionsAction()
    {

        $om = $this->getDoctrine()->getManager("customer");

        $questions = $om->getRepository("AllotoolsFaqBundle:Question")->findAll();
        $fils = $om->getRepository("AllotoolsFaqBundle:Fils")->findAll();

        return $this->render('AllotoolsFaqBundle:Admin/Question:affiche.html.twig',
            array("questions" => $questions, "fils" => $fils));
    }

    public function addQuestionAction()
    {

        $question = new Question();

        $form = $this->createForm(new QuestionType, $question);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager("customer");
                if (!$this->doublon($question)) {
                    $em->persist($question);
                    $em->flush();

                    return $this->redirect($this->generateUrl('allotools_faq_manage_questions'));
                } else {
                    return $this->render('AllotoolsFaqBundle:Admin/Question:ajoute.html.twig', array(
                        'form' => $form->createView()
                    ));
                }
            }
        }

        return $this->render('AllotoolsFaqBundle:Admin/Question:ajoute.html.twig', array(
            'form' => $form->createView()
        ));
    }

    private function doublon(Question $question)
    {

        $emQuestion = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Question");
        /** @var Question $questiondoublon */
        $questiondoublon = $emQuestion->findOneBy(array("libelle" => $question->getLibelle()));

        if (count($questiondoublon) > 0 && $questiondoublon->getId() != $question->getId()) {
            $this->get('session')->getFlashBag()->add(
                'erreur',
                'Ce libellé existe déjà !'
            );
            return true;
        } else {
            return false;
        }

    }

    public function editQuestionAction($id)
    {

        $em = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Question");

        /* @var $question Question */
        $question = $em->find($id);

        $form = $this->createForm(new QuestionEditType, $question);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager("customer");
                if (!$this->doublon($question)) {
                    $em->persist($question);
                    $em->flush();

                    return $this->redirect($this->generateUrl('allotools_faq_manage_questions'));
                } else {
                    return $this->render('AllotoolsFaqBundle:Admin/Question:modifier.html.twig', array(
                        'form' => $form->createView()
                    ));
                }

            }
        }

        return $this->render('AllotoolsFaqBundle:Admin/Question:modifier.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteQuestionAction($id)
    {

        $em = $this->getDoctrine()->getRepository("AllotoolsFaqBundle:Question");

        /* @var $question Question */
        $question = $em->find($id);

        $em = $this->getDoctrine()->getManager("customer");

        $em->remove($question);

        $em->flush();

        return $this->redirect($this->generateUrl('allotools_faq_manage_questions'));
    }
} 