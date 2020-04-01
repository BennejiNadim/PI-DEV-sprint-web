<?php

namespace agora\stockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="agora\stockBundle\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_catg", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCatg;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_catg", type="string", length=50, nullable=false)
     */
    private $libCatg;

    /**
     * @return int
     */
    public function getIdCatg()
    {
        return $this->idCatg;
    }

    /**
     * @param int $idCatg
     */
    public function setIdCatg($idCatg)
    {
        $this->idCatg = $idCatg;
    }

    /**
     * @return string
     */
    public function getLibCatg()
    {
        return $this->libCatg;
    }

    /**
     * @param string $libCatg
     */
    public function setLibCatg($libCatg)
    {
        $this->libCatg = $libCatg;
    }


}

