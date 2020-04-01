<?php

namespace AppBundle\Entity;

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
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param string $operation
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
    }

    /**
     * @return string
     */
    public function getEquipement()
    {
        return $this->equipement;
    }

    /**
     * @param string $equipement
     */
    public function setEquipement($equipement)
    {
        $this->equipement = $equipement;
    }

    /**
     * @return int
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param int $qte
     */
    public function setQte($qte)
    {
        $this->qte = $qte;
    }

    /**
     * @return int
     */
    public function getIdM()
    {
        return $this->idM;
    }

    /**
     * @param int $idM
     */
    public function setIdM($idM)
    {
        $this->idM = $idM;
    }

    /**
     * @return int
     */
    public function getIdV()
    {
        return $this->idV;
    }

    /**
     * @param int $idV
     */
    public function setIdV($idV)
    {
        $this->idV = $idV;
    }

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return int
     */
    public function getIdF()
    {
        return $this->idF;
    }

    /**
     * @param int $idF
     */
    public function setIdF($idF)
    {
        $this->idF = $idF;
    }


}

