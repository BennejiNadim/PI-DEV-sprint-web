<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mouvementproduit
 *
 * @ORM\Table(name="mouvementproduit", indexes={@ORM\Index(name="id_produit", columns={"id_produit"})})
 * @ORM\Entity
 */
class Mouvementproduit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_mouvement_Produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMouvementProduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_facture", type="integer", nullable=false)
     */
    private $idFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", nullable=false)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", nullable=false)
     */
    private $destination;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     */
    private $idProduit;

    /**
     * @return int
     */
    public function getIdMouvementProduit()
    {
        return $this->idMouvementProduit;
    }

    /**
     * @param int $idMouvementProduit
     */
    public function setIdMouvementProduit($idMouvementProduit)
    {
        $this->idMouvementProduit = $idMouvementProduit;
    }

    /**
     * @return int
     */
    public function getIdFacture()
    {
        return $this->idFacture;
    }

    /**
     * @param int $idFacture
     */
    public function setIdFacture($idFacture)
    {
        $this->idFacture = $idFacture;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * @param int $idProduit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }


}

