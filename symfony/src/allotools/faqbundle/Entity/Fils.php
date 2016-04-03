<?php

namespace Allotools\FaqBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Fils
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Allotools\FaqBundle\Entity\FilsRepository")
 */
class Fils
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

        /**
         * @var arbre
         * @ORM\ManyToOne(targetEntity="Allotools\FaqBundle\Entity\Arbre")
         * @ORM\Id
         */
        private $arbre;

    /**
     * @var question
     * @ORM\ManyToOne(targetEntity="Allotools\FaqBundle\Entity\Question")
     * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
     */
    private $question;



    /**
     * @var article
     * @ORM\ManyToOne(targetEntity="Allotools\FaqBundle\Entity\Article")
     * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
     */
    private $article;

    /**
     * @var $filso
     * @ORM\Column(name="filso", type="integer", nullable=true)
     */
    private $filso;

    /**
     * @var $filsn
     * @ORM\Column(name="filsn", type="integer", nullable=true)
     */
    private $filsn;

    

   

    /**
     * Set id
     *
     * @param integer $id
     * @return Fils
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set filso
     *
     * @param integer $filso
     * @return Fils
     */
    public function setFilso($filso)
    {
        $this->filso = $filso;

        return $this;
    }

    /**
     * Get filso
     *
     * @return integer 
     */
    public function getFilso()
    {
        return $this->filso;
    }

    /**
     * Set filsn
     *
     * @param integer $filsn
     * @return Fils
     */
    public function setFilsn($filsn)
    {
        $this->filsn = $filsn;

        return $this;
    }

    /**
     * Get filsn
     *
     * @return integer 
     */
    public function getFilsn()
    {
        return $this->filsn;
    }

    /**
     * Set arbre
     *
     * @param \Allotools\FaqBundle\Entity\Arbre $arbre
     * @return Fils
     */
    public function setArbre(\Allotools\FaqBundle\Entity\Arbre $arbre)
    {
        $this->arbre = $arbre;

        return $this;
    }

    /**
     * Get arbre
     *
     * @return \Allotools\FaqBundle\Entity\Arbre 
     */
    public function getArbre()
    {
        return $this->arbre;
    }

    /**
     * Set question
     *
     * @param \Allotools\FaqBundle\Entity\Question $question
     * @return Fils
     */
    public function setQuestion(\Allotools\FaqBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \Allotools\FaqBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set article
     *
     * @param \Allotools\FaqBundle\Entity\Article $article
     * @return Fils
     */
    public function setArticle(\Allotools\FaqBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \Allotools\FaqBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
}
