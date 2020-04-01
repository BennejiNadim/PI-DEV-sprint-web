<?php

namespace agora\stockBundle\Controller;

use agora\stockBundle\Entity\Produit;
use agora\stockBundle\Entity\Marque;
use agora\stockBundle\Entity\Categorie;
use ClubBundle\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@stock/Default/index.html.twig');
    }

    public function listProductsAction(Request $request)
    {

            $produits=$this->getDoctrine()->getRepository(Produit::class)->findAll();
            $categories=$this->getDoctrine()->getRepository(Categorie::class)->ListCatg();
            $marques=$this->getDoctrine()->getRepository(Marque::class)->ListMarque();
        return $this->render('@stock/products.html.twig',array('produits'=>$produits,'categories'=>$categories,'marques'=>$marques));
    }
    public function listProductsByCatgAction(Request $request,$catg)
    {
        $produits=$this->getDoctrine()->getRepository(Produit::class)->ProduitCatg($catg);
        $categories=$this->getDoctrine()->getRepository(Categorie::class)->ListCatg();
        $marques=$this->getDoctrine()->getRepository(Marque::class)->ListMarque();
        return $this->render('@stock/products.html.twig',array('produits'=>$produits,'categories'=>$categories,'marques'=>$marques));
    }
    public function listProductsByMarqAction(Request $request,$marq)
    {
        $produits=$this->getDoctrine()->getRepository(Produit::class)->ProduitMarq($marq);
        $categories=$this->getDoctrine()->getRepository(Categorie::class)->ListCatg();
        $marques=$this->getDoctrine()->getRepository(Marque::class)->ListMarque();
        return $this->render('@stock/products.html.twig',array('produits'=>$produits,'categories'=>$categories,'marques'=>$marques));
    }
    public function searchProductsAction(Request $req)
    {
        $categories=$this->getDoctrine()->getRepository(Categorie::class)->ListCatg();
        $marques=$this->getDoctrine()->getRepository(Marque::class)->ListMarque();
        if($req->isMethod('POST')){
            $p=$req->request->get('produit');
            $produits=$this->getDoctrine()->getRepository(Produit::class)->FindProducts($p);
        }
        return $this->render('@stock/products.html.twig',array('produits'=>$produits,'categories'=>$categories,'marques'=>$marques));
    }
}
