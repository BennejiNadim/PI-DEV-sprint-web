<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historiqueequipements
 *
 * @ORM\Table(name="historiqueequipements", indexes={@ORM\Index(name="id_m", columns={"id_m"}), @ORM\Index(name="id_v", columns={"id_v"}), @ORM\Index(name="id_f", columns={"id_f"})})
 * @ORM\Entity
 */
class Historiqueequipements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="operation", type="string", nullable=false)
     */
    private $operation;

    /**
     * @var string
     *
     * @ORM\Column(name="equipement", type="string", nullable=false)
     */
    private $equipement;

    /**
     * @var integer
     *
     * @ORM\Column(name="qte", type="integer", nullable=false)
     */
    private $qte;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_m", type="integer", nullable=false)
     */
    private $idM;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_v", type="integer", nullable=false)
     */
    private $idV;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_f", type="integer", nullable=false)
     */
    private $idF;


}

