<?php

namespace Allotools\FaqBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Arbre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Allotools\FaqBundle\Entity\ArbreRepository")
 */
class Arbre
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
     * @ORM\Column(name="nb_vue", type="integer")
     */
    private $nb_vue = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\ManyToOne(targetEntity="Allotools\FaqBundle\Entity\Categorie")
     *
     */
    private $categorie;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean")
     */
    private $actif = true;

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
     * Set id
     *
     * @param integer $id
     * @return Arbre
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Arbre
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set categorie
     *
     * @param Categorie $categorie
     * @return Arbre
     */
    public function setCategorie(Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return Arbre
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get nb_vue
     *
     * @return integer
     */
    public function getNbVue()
    {
        return $this->nb_vue;
    }

    /**
     * Set nb_vue
     *
     * @param integer $nbVue
     * @return Arbre
     */
    public function setNbVue($nbVue)
    {
        $this->nb_vue = $nbVue;

        return $this;
    }
}
