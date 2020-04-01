<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction", indexes={@ORM\Index(name="idFacture", columns={"idFacture"})})
 * @ORM\Entity
 */
class Transaction
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
     * @ORM\Column(name="monton", type="decimal", precision=20, scale=0, nullable=false)
     */
    private $monton;

    /**
     * @var string
     *
     * @ORM\Column(name="etatTransaction", type="string", nullable=false)
     */
    private $etattransaction;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFacture", type="integer", nullable=false)
     */
    private $idfacture;

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
    public function getMonton()
    {
        return $this->monton;
    }

    /**
     * @param string $monton
     */
    public function setMonton($monton)
    {
        $this->monton = $monton;
    }

    /**
     * @return string
     */
    public function getEtattransaction()
    {
        return $this->etattransaction;
    }

    /**
     * @param string $etattransaction
     */
    public function setEtattransaction($etattransaction)
    {
        $this->etattransaction = $etattransaction;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getIdfacture()
    {
        return $this->idfacture;
    }

    /**
     * @param int $idfacture
     */
    public function setIdfacture($idfacture)
    {
        $this->idfacture = $idfacture;
    }


}

