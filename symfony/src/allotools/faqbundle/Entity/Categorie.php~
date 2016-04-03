<?php

namespace Allotools\FaqBundle\Entity;

use Allotools\FaqBundle\Entity\Article;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Allotools\FaqBundle\Entity\CategorieRepository")
 */
class Categorie
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
     * @var string
     *
     * @ORM\Column(name="lib", type="string", length=255)
     */
    private $lib;

        /**
         * @var boolean
         *
         * @ORM\Column(name="public", type="boolean", length=255)
         */
        private $public = false;


        /**
         * @var ArrayCollection Profil $profil
         * Owning Side
         *
         * @ORM\ManyToMany(targetEntity="Allotools\UserBundle\Entity\Profil")
         *
         */
        private $profil;

        /**
         * @var string
         *
         * @ORM\Column(name="route", type="string", length=255)
         */
        private $route;

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
     * Set lib
     *
     * @param string $lib
     * @return Categorie
     */
    public function setLib($lib)
    {
        $this->lib = $lib;

        return $this;
    }

    /**
     * Get lib
     *
     * @return string 
     */
    public function getLib()
    {
        return $this->lib;
    }


 
    /**
     * Add profil
     *
     * @param \Allotools\UserBundle\Entity\Profil $profil
     * @return Categorie
     */
    public function addProfil(\Allotools\UserBundle\Entity\Profil $profil)
    {
        $this->profil[] = $profil;

        return $this;
    }

    public function setProfil(\Allotools\UserBundle\Entity\Profil $profil){
            $this->profil = null;
            $this->profil[] = $profil;

    }

    /**
     * Remove profil
     *
     * @param \Allotools\UserBundle\Entity\Profil $profil
     */
    public function removeProfil(\Allotools\UserBundle\Entity\Profil $profil)
    {
        $this->profil->removeElement($profil);
    }

    /**
     * Get profil
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfil()
    {
        return $this->profil;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profil = new \Doctrine\Common\Collections\ArrayCollection();
    }


        public function __toString(){
                return $this->lib;
        }


    /**
     * Set route
     *
     * @param string $route
     * @return Categorie
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return string 
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Set public
     *
     * @param boolean $public
     * @return Categorie
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic()
    {
        return $this->public;
    }
}
