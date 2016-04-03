<?php

namespace Allotools\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="Allotools\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var profil
     *
     * @ORM\ManyToOne(targetEntity="Allotools\UserBundle\Entity\Profil")
     * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
     */
    private $profil;

    public function __construct()
    {
        parent::__construct();
        // your own logic
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
     * Get profil
     *
     * @return Profil
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set profil
     *
     * @param Profil $profil
     * @return User
     */
    public function setProfil(Profil $profil = null)
    {
        $this->profil = $profil;

        return $this;
    }
}
