<?php


namespace agora\stockBundle\Repository;


use Doctrine\ORM\EntityRepository;

class ProduitRepository extends EntityRepository
{
    public function ProduitCatg($catg)
    {
        $ql=$this->getEntityManager()->createQuery("select p from stockBundle:Produit p where p.categorie=:catg")->setParameter('catg',$catg);
        return $query=$ql->getResult();
    }
    public function ProduitMarq($marq)
    {
        $ql=$this->getEntityManager()->createQuery("select p from stockBundle:Produit p where p.marque=:marq")->setParameter('marq',$marq);
        return $query=$ql->getResult();
    }
    public function FindProducts($prod)
    {
        $ql=$this->getEntityManager()->createQuery("select p from stockBundle:Produit p where p.nomProduit=:p")->setParameter('p',$prod);
        return $query=$ql->getResult();
    }

}
