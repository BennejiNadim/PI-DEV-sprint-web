<?php

namespace agora\stockBundle\stockController;

use App\Entity\Mouvementproduit;
use AppBundle\Entity\Categorie;
use AppBundle\Entity\Produit;
use ClubBundle\Entity\Club;
use ClubBundle\Form\ClubType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class stockController extends Controller
{
    public function indexAction()
    {
        return $this->render('stockBundle:Default:index.html.twig');
    }

    /**Crud produit **/
    public function afficherProduitAction()
    {
        $produits=$this->getDoctrine()->getRepository(Produit::class)->findAll();
        return $this->$produits;
    }
    public function deleteProduitAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository(Produit::class)->find($id);
        $em->remove($produit);
        $em->flush();
    }
    public function createProduitAction(Request $request)
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form = $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
        }
        }
    public function updateProduitAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository(Produit::class)->find($id);
        $form=$this->createForm(ProduitType::class,$produit);
        $form=$form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
        }
    }
    /*******Crud MvtProduit********/
    public function afficherMvtAction()
    {
        $produits=$this->getDoctrine()->getRepository(Mouvementproduit::class)->findAll();
        return $this->$produits;
    }
    public function deleteMvtAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $mvtproduit=$em->getRepository(Mouvementproduit::class)->find($id);
        $em->remove($mvtproduit);
        $em->flush();
    }
    public function createMvtAction(Request $request)
    {
        $mvtproduit = new Mouvementproduit();
        $form = $this->createForm(ClubType::class, $mvtproduit);
        $form = $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mvtproduit);
            $em->flush();
        }
    }
    public function updateMvtAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $mvtproduit=$em->getRepository(Mouvementproduit::class)->find($id);
        $form=$this->createForm(ClubType::class,$mvtproduit);
        $form=$form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
        }
    }
    /*******Crud Categorie********/
    public function afficherCategorieAction()
    {
        $categorie=$this->getDoctrine()->getRepository(Categorie::class)->findAll();
        return $this->$categorie;
    }
    public function deleteMCategorieAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $categorie=$em->getRepository(Categorie::class)->find($id);
        $em->remove($categorie);
        $em->flush();
    }
    public function createCategorieAction(Request $request)
    {
        $categorie = new Categorie();
        $form = $this->createForm(ClubType::class, $categorie);
        $form = $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
        }
    }
    public function updateCategorizAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $categorie=$em->getRepository(Categorie::class)->find($id);
        $form=$this->createForm(ClubType::class,$categorie);
        $form=$form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
        }
    }

    /********************************************************/

    public function listProductsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('products.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    }