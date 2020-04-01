<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 * @Vich\Uploadable
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
    private $quantite_Stock;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite_magasin", type="integer", nullable=false)
     */
    private $quantite_Magasin;

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
     * @ORM\Column(name="image", type="string")
     */
    private $image;
    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;
    /**
     * @ORM\Column(type="integer")
     * @var \integer
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
     * @return string
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @return int
     */
    public function getQuantiteStock()
    {
        return $this->quantite_Stock;
    }

    /**
     * @return int
     */
    public function getQuantiteMagasin()
    {
        return $this->quantite_Magasin;
    }

    /**
     * @return float
     */
    public function getPrixVente()
    {
        return $this->prixVente;
    }

    /**
     * @return float
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * @param int $refProduit
     */
    public function setRefProduit($refProduit)
    {
        $this->refProduit = $refProduit;
    }

    /**
     * @param string $nomProduit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;
    }

    /**
     * @param string $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @param int $quantite_Stock
     */
    public function setQuantiteStock($quantite_Stock)
    {
        $this->quantite_Stock = $quantite_Stock;
    }

    /**
     * @param int $quantite_Magasin
     */
    public function setQuantiteMagasin($quantite_Magasin)
    {
        $this->quantite_Magasin = $quantite_Magasin;
    }

    /**
     * @param float $prixVente
     */
    public function setPrixVente($prixVente)
    {
        $this->prixVente = $prixVente;
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
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param File $imageFile
     */
    public function setImageFile($image=null)
    {
        $this->imageFile = $image;
        if ($image) {
            $this->updated=1;
        }
    }

    /**
     * @return \int
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \int $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }


}

