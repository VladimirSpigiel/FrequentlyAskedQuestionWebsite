<?php

namespace Allotools\FaqBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Server
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Allotools\FaqBundle\Entity\ServerRepository")
 */
class Server
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
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=255)
     */
    private $host;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=255, nullable=true)
     */
    private $pwd;

    /**
     * @var string
     *
     * @ORM\Column(name="dbname", type="string", length=255)
     */
    private $dbname;

    /**
     * @var string
     *
     * @ORM\Column(name="tbname", type="string", length=255)
     */
    private $tbname;

    /**
     * @var string
     *
     * @ORM\Column(name="type_bdd", type="string", length=255)
     */
    private $type_bdd;

    /**
     * @var string
     *
     * @ORM\Column(name="type_service", type="string", length=255)
     */
    private $type_service;

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
     * @return Server
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
     * Set host
     *
     * @param string $host
     * @return Server
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string 
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Server
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     * @return Server
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string 
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set dbname
     *
     * @param string $dbname
     * @return Server
     */
    public function setDbname($dbname)
    {
        $this->dbname = $dbname;

        return $this;
    }

    /**
     * Get dbname
     *
     * @return string 
     */
    public function getDbname()
    {
        return $this->dbname;
    }

    /**
     * Set tbname
     *
     * @param string $tbname
     * @return Server
     */
    public function setTbname($tbname)
    {
        $this->tbname = $tbname;

        return $this;
    }

    /**
     * Get tbname
     *
     * @return string 
     */
    public function getTbname()
    {
        return $this->tbname;
    }

    /**
     * Set type_bdd
     *
     * @param string $typeBdd
     * @return Server
     */
    public function setTypeBdd($typeBdd)
    {
        $this->type_bdd = $typeBdd;

        return $this;
    }

    /**
     * Get type_bdd
     *
     * @return string 
     */
    public function getTypeBdd()
    {
        return $this->type_bdd;
    }


    /**
     * Set type_service
     *
     * @param string $typeService
     * @return Server
     */
    public function setTypeService($typeService)
    {
        $this->type_service = $typeService;

        return $this;
    }

    /**
     * Get type_service
     *
     * @return string 
     */
    public function getTypeService()
    {
        return $this->type_service;
    }

    public function __toString(){
            return $this->lib;
    }
}
