<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="equipo")
 */
class EquipoBidireccional
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="id_equipo", type="integer", nullable=false)
     */
    private $idEquipo;

    /**
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @ORM\Column(name="socios", type="integer", nullable=true)
     */
    private $socios;

    /**
     * @ORM\Column(name="fundacion", type="integer", nullable=true)
     */
    private $fundacion;

    /**
     * @ORM\Column(name="ciudad", type="string", length=50, nullable=true)
     */
    private $ciudad;

    /**
     * @ORM\Column(name="estadio", type="string", length=50, nullable=true)
     */
    private $estadio;

    /**
     * @ORM\OneToMany(targetEntity="PartidoBidireccional", mappedBy="local")
     */
    private $partidosLocal;

    /**
     * @ORM\OneToMany(targetEntity="PartidoBidireccional", mappedBy="visitante")
     */
    private $partidosVisitante;

    public function __construct()
    {
        $this->partidosLocal = new ArrayCollection();
        $this->partidosVisitante = new ArrayCollection();
    }

    public function getIdEquipo()
    {
        return $this->idEquipo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getSocios()
    {
        return $this->socios;
    }

    public function setSocios($socios)
    {
        $this->socios = $socios;
        return $this;
    }

    public function getFundacion()
    {
        return $this->fundacion;
    }

    public function setFundacion($fundacion)
    {
        $this->fundacion = $fundacion;
        return $this;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
        return $this;
    }

    public function getEstadio()
    {
        return $this->estadio;
    }

    public function setEstadio($estadio)
    {
        $this->estadio = $estadio;
        return $this;
    }

    public function getPartidosLocal()
    {
        return $this->partidosLocal;
    }

    public function getPartidosVisitante()
    {
        return $this->partidosVisitante;
    }
}
