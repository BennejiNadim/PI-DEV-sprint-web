<?php

namespace App\Entity;

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


}

