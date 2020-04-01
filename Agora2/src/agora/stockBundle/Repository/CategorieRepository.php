<?php


namespace agora\stockBundle\Repository;


use Doctrine\ORM\EntityRepository;

class CategorieRepository extends EntityRepository
{
    public function ListCatg()
    {
        $ql=$this->getEntityManager()->createQuery("select c.libCatg from stockBundle:Categorie c ");
        return $query=$ql->getResult();
    }

}
