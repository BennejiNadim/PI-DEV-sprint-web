<?php

namespace AppBundle\Entity;

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

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getDatefacturation()
    {
        return $this->datefacturation;
    }

    /**
     * @param \DateTime $datefacturation
     */
    public function setDatefacturation($datefacturation)
    {
        $this->datefacturation = $datefacturation;
    }

    /**
     * @return string
     */
    public function getEtatfacture()
    {
        return $this->etatfacture;
    }

    /**
     * @param string $etatfacture
     */
    public function setEtatfacture($etatfacture)
    {
        $this->etatfacture = $etatfacture;
    }

    /**
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param string $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return string
     */
    public function getClientlogin()
    {
        return $this->clientlogin;
    }

    /**
     * @param string $clientlogin
     */
    public function setClientlogin($clientlogin)
    {
        $this->clientlogin = $clientlogin;
    }

    /**
     * @return int
     */
    public function getSupplierid()
    {
        return $this->supplierid;
    }

    /**
     * @param int $supplierid
     */
    public function setSupplierid($supplierid)
    {
        $this->supplierid = $supplierid;
    }

    /**
     * @return string
     */
    public function getEmployelogin()
    {
        return $this->employelogin;
    }

    /**
     * @param string $employelogin
     */
    public function setEmployelogin($employelogin)
    {
        $this->employelogin = $employelogin;
    }

    /**
     * @return string
     */
    public function getTypefacture()
    {
        return $this->typefacture;
    }

    /**
     * @param string $typefacture
     */
    public function setTypefacture($typefacture)
    {
        $this->typefacture = $typefacture;
    }


}

