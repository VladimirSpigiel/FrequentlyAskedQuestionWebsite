<?php

namespace Allotools\FaqBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Allotools\FaqBundle\Entity\Article;
/**
 * ArticleUtile
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Allotools\FaqBundle\Entity\ArticleUtileRepository")
 */
class ArticleUtile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="utile", type="integer")
     */
    private $utile;

    /**
     * @var integer
     *
     * @ORM\Column(name="compteur", type="integer")
     */
    private $compteur;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Allotools\FaqBundle\Entity\Article")
     *@ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    private $article;


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
     * Set utile
     *
     * @param integer $utile
     * @return ArticleUtile
     */
    public function setUtile($utile)
    {
        $this->utile = $utile;

        return $this;
    }

    /**
     * Get utile
     *
     * @return integer 
     */
    public function getUtile()
    {
        return $this->utile;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return ArticleUtile
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set article
     *
     * @param \Allotools\FaqBundle\Entity\Article $article
     * @return ArticleUtile
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

    /**
     * Set compteur
     *
     * @param integer $compteur
     * @return ArticleUtile
     */
    public function setCompteur($compteur)
    {
        $this->compteur = $compteur;

        return $this;
    }

    /**
     * Get compteur
     *
     * @return integer 
     */
    public function getCompteur()
    {
        return $this->compteur;
    }
}
