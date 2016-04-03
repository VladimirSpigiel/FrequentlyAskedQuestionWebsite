<?php

namespace Allotools\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Yaml\Parser;


/**
 * Profil
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Allotools\UserBundle\Entity\ProfilRepository")
 */
class Profil
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
         * @ORM\Column(name="libelle", type="string")
         *
         */
    private $libelle;

        /**
         * @var string
         *
         * @ORM\Column(name="description", type="string", nullable=true)
         *
         */
        private $description;

        /**
         * @var array
         *
         * @ORM\Column(name="role", type="array")
         *
         */
    private $role;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

        public function setId($id){
               $this->id = $id;
        }

    /**
     * Set role
     *
     * @param array $role
     * @return Profil
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return array 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Profil
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

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
     * Set description
     *
     * @param string $description
     * @return Profil
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }


        public static function getRolesNames(){
                $pathToSecurity = __DIR__ ."../../../../../app/config/security.yml";
                $yaml = new Parser();
                $rolesArray = $yaml->parse(file_get_contents($pathToSecurity ));

                return $rolesArray['security']['role_hierarchy'];
        }


        public function __toString(){
                return $this->libelle;
        }
}
