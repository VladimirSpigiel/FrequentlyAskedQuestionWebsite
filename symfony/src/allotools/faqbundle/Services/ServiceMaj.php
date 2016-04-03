<?php

// src/Allotools/FaqBundle/Services/ServiceMaj.php

namespace Allotools\FaqBundle\Services;

use Allotools\FaqBundle\Entity\Server;
use Allotools\FaqBundle\Services;
use Doctrine\Common\Persistence\ObjectManager;

class ServiceMaj
{

    static function updateAll(ObjectManager $om)
    {
        $nb_changes = Array('nb_ajouts' => 0, 'nb_updates' => 0, 'nb_deletes' => 0);
        /* @var $listeServers Server[] */
        $listeServers = $om->getRepository('AllotoolsFaqBundle:Server')->findAll();
        foreach ($listeServers as $server) {
            $type_service = "Allotools\\FaqBundle\\Services\\" . $server->getTypeService();
            $serviceMaj = new $type_service($om);
            /* @var $serviceMaj iMajArticles */
            $serviceMaj->updateAllArticles($server, $nb_changes);
        }
        return $nb_changes;
    }

    static function updateOne(ObjectManager $om, Server $server)
    {
        $nb_changes = Array('nb_ajouts' => 0, 'nb_updates' => 0, 'nb_deletes' => 0);
        $type_service = "Allotools\\FaqBundle\\Services\\" . $server->getTypeService();
        $serviceMaj = new $type_service($om);
        /* @var $serviceMaj iMajArticles */
        $serviceMaj->updateAllArticles($server, $nb_changes);
        return $nb_changes;
    }

}
