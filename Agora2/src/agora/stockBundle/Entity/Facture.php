<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="ClientLogin", columns={"ClientLogin"}), @ORM\Index(name="EmployeLogin", columns={"EmployeLogin"}), @ORM\Index(name="SupplierId", columns={"SupplierId"})})
 * @ORM\Entity
 */
class Facture
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
     * @ORM\Column(name="dateFacturation", type="date", nullable=false)
     */
    private $datefacturation;

    /**
     * @var string
     *
     * @ORM\Column(name="etatFacture", type="string", nullable=false)
     */
    private $etatfacture;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=20, scale=3, nullable=false)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientLogin", type="string", length=20, nullable=false)
     */
    private $clientlogin;

    /**
     * @var integer
     *
     * @ORM\Column(name="SupplierId", type="integer", nullable=false)
     */
    private $supplierid;

    /**
     * @var string
     *
     * @ORM\Column(name="EmployeLogin", type="string", length=20, nullable=false)
     */
    private $employelogin;

    /**
     * @var string
     *
     * @ORM\Column(name="typeFacture", type="string", nullable=false)
     */
    private $typefacture;


}

