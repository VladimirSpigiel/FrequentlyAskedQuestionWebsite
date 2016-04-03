<?php

// src/Allotools/FaqBundle/Services/iMajArticles.php

namespace Allotools\FaqBundle\Services;

use Allotools\FaqBundle\Entity\Server;

interface iMajArticles
{
    function updateAllArticles(Server $server, &$nb_changes);

    function getArticlesFromServer(Server $server);

    function isExist($id, Server $server);

    function updateArticle($article, $row, Server $server, &$nb_ajouts, &$nb_updates);

    function deleteIfDeletedDistant($listeArticles, Server $server, &$nb_deletes);
}
