<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marque
 *
 * @ORM\Table(name="marque")
 * @ORM\Entity
 */
class Marque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_marque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMarque;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_marque", type="string", length=50, nullable=false)
     */
    private $nomMarque;


    /**
     * @return int
     */
    public function getIdMarque()
    {
        return $this->idMarque;
    }

    /**
     * @param int $idMarque
     */
    public function setIdMarque($idMarque)
    {
        $this->idMarque = $idMarque;
    }

    /**
     * @return string
     */
    public function getNomMarque()
    {
        return $this->nomMarque;
    }

    /**
     * @param string $nomMarque
     */
    public function setNomMarque($nomMarque)
    {
        $this->nomMarque = $nomMarque;
    }

    /**
     * @return mixed
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }

    public function __toString()
    {
        return ""+$this->getIdMarque();
    }


}

