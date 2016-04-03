<?php

// src/Allotools/FaqBundle/Services/ServiceCo.php

namespace Allotools\FaqBundle\Services;

use Allotools\FaqBundle\Entity\Server;
use Doctrine\Common\Persistence\ObjectManager;
use PDO;
use PDOException;

abstract class ServiceCo implements iMajArticles
{
    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @var PDO
     */
    private $PDO;

    /**
     * @return \Doctrine\Common\Persistence\ObjectManager
     */
    public function getOm()
    {
        return $this->om;
    }

    /**
     * @param \Doctrine\Common\Persistence\ObjectManager $om
     */
    public function setOm($om)
    {
        $this->om = $om;
    }

    /**
     * @return mixed
     */
    public function getPDO()
    {
        return $this->PDO;
    }

    /**
     * @param mixed $PDO
     */
    public function setPDO($PDO)
    {
        $this->PDO = $PDO;
    }

    protected function connectPDO($type_bdd, $host, $dbname, $user, $pwd)
    {
        try {
            $this->PDO = new PDO($type_bdd . ':host=' . $host . ';dbname=' . $dbname, $user, $pwd);
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->PDO->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

}