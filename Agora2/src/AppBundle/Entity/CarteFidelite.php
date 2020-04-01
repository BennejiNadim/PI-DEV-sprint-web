<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarteFidelite
 *
 * @ORM\Table(name="carte_fidelite", indexes={@ORM\Index(name="Id_user", columns={"Id_user"})})
 * @ORM\Entity
 */
class CarteFidelite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_CF", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCf;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_user", type="string", length=20, nullable=true)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_point", type="integer", nullable=true)
     */
    private $nbPoint;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=50, nullable=true)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string", length=50, nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @return int
     */
    public function getIdCf()
    {
        return $this->idCf;
    }

    /**
     * @return string
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @return int
     */
    public function getNbPoint()
    {
        return $this->nbPoint;
    }

    /**
     * @return string
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @return string
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $idCf
     */
    public function setIdCf($idCf)
    {
        $this->idCf = $idCf;
    }

    /**
     * @param string $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @param int $nbPoint
     */
    public function setNbPoint($nbPoint)
    {
        $this->nbPoint = $nbPoint;
    }

    /**
     * @param string $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @param string $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


}

