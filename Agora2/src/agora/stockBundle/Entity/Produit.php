<?php

namespace agora\stockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="categorie", columns={"categorie"}), @ORM\Index(name="marque", columns={"marque"})})
 * @ORM\Entity(repositoryClass="agora\stockBundle\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ref_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_produit", type="string", length=50, nullable=false)
     */
    private $nomProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=50, nullable=false)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=50, nullable=false)
     */
    private $categorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite_stock", type="integer", nullable=false)
     */
    private $quantiteStock;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite_magasin", type="integer", nullable=false)
     */
    private $quantiteMagasin;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_vente", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixVente;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_achat", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixAchat;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated", type="integer", nullable=false)
     */
    private $updated;

    /**
     * @return int
     */
    public function getRefProduit()
    {
        return $this->refProduit;
    }

    /**
     * @param int $refProduit
     */
    public function setRefProduit($refProduit)
    {
        $this->refProduit = $refProduit;
    }

    /**
     * @return string
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * @param string $nomProduit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;
    }

    /**
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return int
     */
    public function getQuantiteStock()
    {
        return $this->quantiteStock;
    }

    /**
     * @param int $quantiteStock
     */
    public function setQuantiteStock($quantiteStock)
    {
        $this->quantiteStock = $quantiteStock;
    }

    /**
     * @return int
     */
    public function getQuantiteMagasin()
    {
        return $this->quantiteMagasin;
    }

    /**
     * @param int $quantiteMagasin
     */
    public function setQuantiteMagasin($quantiteMagasin)
    {
        $this->quantiteMagasin = $quantiteMagasin;
    }

    /**
     * @return float
     */
    public function getPrixVente()
    {
        return $this->prixVente;
    }

    /**
     * @param float $prixVente
     */
    public function setPrixVente($prixVente)
    {
        $this->prixVente = $prixVente;
    }

    /**
     * @return float
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * @param float $prixAchat
     */
    public function setPrixAchat($prixAchat)
    {
        $this->prixAchat = $prixAchat;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param int $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }


}

