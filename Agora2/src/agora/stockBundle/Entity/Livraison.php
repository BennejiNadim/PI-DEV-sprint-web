<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison")
 * @ORM\Entity
 */
class Livraison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_livraison", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=true)
     */
    private $etat;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_commande", type="integer", nullable=true)
     */
    private $idCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="trucking", type="string", length=200, nullable=true)
     */
    private $trucking;


}

