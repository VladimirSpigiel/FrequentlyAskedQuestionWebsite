<?php

namespace Allotools\FaqBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FilsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FilsRepository extends EntityRepository
{
    public function findFilsInactif(){
    return $this->getEntityManager("customer")
    ->createQuery(
    'SELECT f
     FROM AllotoolsFaqBundle:Fils f
     WHERE f.filso is null
     AND f.filsn is null
     AND f.article is null
     ')->getResult();
    }


    public function findFilsArticleInactif(){
        $query=$this->getEntityManager("customer")
            ->createQuery(
                'SELECT f
                 FROM AllotoolsFaqBundle:Fils f
                 JOIN f.article a
                 WHERE a.actif = false
                 ');

        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    //en reparler !!!
}
