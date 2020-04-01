<?php


namespace agora\stockBundle\Repository;


use Doctrine\ORM\EntityRepository;

class MarqueRepository extends EntityRepository
{
    public function ListMarque()
    {
        $ql=$this->getEntityManager()->createQuery("select m.nomMarque from stockBundle:Marque m ");
        return $query=$ql->getResult();
    }

}