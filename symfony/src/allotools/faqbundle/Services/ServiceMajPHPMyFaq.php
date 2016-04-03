<?php

namespace Allotools\FaqBundle\Services;

use Allotools\FaqBundle\Entity\Article;
use Allotools\FaqBundle\Entity\Server;
use Doctrine\Common\Persistence\ObjectManager;
use PDO;
use PDOStatement;

class ServiceMajPHPMyFaq extends ServiceCo
{

    function __construct(ObjectManager $om)
    {
        $this->setOm($om);
    }

    public function updateAllArticles(Server $server, &$nb_changes)
    {
        /* @var $listeArticles Article[] */
        $listeArticles = $this->getOm()->getRepository("AllotoolsFaqBundle:Article")->findAll();
        $nb_ajouts = &$nb_changes['nb_ajouts'];
        $nb_updates = &$nb_changes['nb_updates'];
        $nb_deletes = &$nb_changes['nb_deletes'];
        // Pour chaque serveur
        // On se connecte au serveur
        $this->connectPDO($server->getTypeBdd(), $server->getHost(), $server->getDbname(), $server->getUser(), $server->getPwd());
        /* @var $stmt PDOStatement */
        // On récupère les articles avec les champs qui nous intéressent seulement (ici phpMyFaq)
        $stmt = $this->getArticlesFromServer($server);
        // Pour chaque article
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            /* @var $article Article */
            // On vérifie si il existe déjà ou pas
            $article = $this->isExist($row['id'], $server);
            $article = $this->updateArticle($article, $row, $server, $nb_ajouts, $nb_updates);
            $this->getOm()->persist($article);
        }
        // On supprime les articles qui ont été supprimés sur le serveur distant en cours
        $this->deleteIfDeletedDistant($listeArticles, $server, $nb_deletes);
        $this->getOm()->flush();
    }

    public function getArticlesFromServer(Server $server)
    {
        return $stmt = $this->getPDO()->query("SELECT `id`, `active`, `keywords`, `thema`, `content`, `author`, `datum` FROM " . $server->getTbname());
    }

    public function isExist($id, Server $server)
    {
        return $article = $this->getOm()->getRepository('AllotoolsFaqBundle:Article')->findOneBy(array(
            'idFaq' => $id,
            'server' => $server
        ));
    }

    public function updateArticle($article, $row, Server $server, &$nb_ajouts, &$nb_updates)
    {
        if (!$article) {
            $article = new Article();
            $article->setIdFaq($row['id']);
            $article->setServer($server);
            $nb_ajouts++;
        } else {
            $nb_updates++;
        }
        $article->setDate(new \DateTime($row['datum']));
        $article->setAuteur($row['author']);
        $article->setContenu($row['content']);
        $article->setKeywords($row['keywords']);
        $article->setTitre($row['thema']);
        if ($row['active'] === "yes") {
            $article->setActif(true);
        } else {
            $article->setActif(false);
        }
        return $article;
    }

    public function deleteIfDeletedDistant($listeArticles, Server $server, &$nb_deletes)
    {
        /* @var $listeArticles Article[] */
        foreach ($listeArticles as $article) {
            // On vérifie d'abord si l'id du serveur est le même que celui de l'article
            if($article->getServer() != null){
                    if ($article->getServer()->getId() == $server->getId()) {
                        $query = "SELECT COUNT(id) FROM " . $server->getTbname() . " WHERE id =" . $article->getIdFaq();
                        /* @var $result PDOStatement */
                        $result = $this->getPDO()->query($query);
                        $result = $result->fetchColumn();
                        if (!$result) {
                            $this->getOm()->remove($article);
                            $nb_deletes++;
                        }
                    }
            }
            else{
                 $this->getOm()->remove($article);
                 $nb_deletes++;
            }
        }

            $this->getOm()->flush();
        return $nb_deletes;
    }

}


