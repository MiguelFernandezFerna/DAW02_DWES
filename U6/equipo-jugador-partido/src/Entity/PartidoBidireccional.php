<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * PartidoBidireccional
 *
 * @ORM\Table(name="partido")
 * @ORM\Entity
 */
class PartidoBidireccional
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_partido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPartido;

    /**
     * @var int|null
     *
     * @ORM\Column(name="goles_local", type="integer", nullable=true)
     */
    private $golesLocal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="goles_visitante", type="integer", nullable=true)
     */
    private $golesVisitante;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \EquipoBidireccional
     *
     * @ORM\ManyToOne(targetEntity="EquipoBidireccional", inversedBy="partidosLocal")
     * @ORM\JoinColumn(name="local", referencedColumnName="id_equipo")
     */
    private $local;

    /**
     * @var \EquipoBidireccional
     *
     * @ORM\ManyToOne(targetEntity="EquipoBidireccional", inversedBy="partidosVisitante")
     * @ORM\JoinColumn(name="visitante", referencedColumnName="id_equipo")
     */
    private $visitante;

    public function getIdPartido()
    {
        return $this->idPartido;
    }

    public function getGolesLocal()
    {
        return $this->golesLocal;
    }

    public function setGolesLocal($golesLocal)
    {
        $this->golesLocal = $golesLocal;
        return $this;
    }

    public function getGolesVisitante()
    {
        return $this->golesVisitante;
    }

    public function setGolesVisitante($golesVisitante)
    {
        $this->golesVisitante = $golesVisitante;
        return $this;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }

    public function getLocal()
    {
        return $this->local;
    }

    public function setLocal(EquipoBidireccional $local)
    {
        $this->local = $local;
        return $this;
    }

    public function getVisitante()
    {
        return $this->visitante;
    }

    public function setVisitante(EquipoBidireccional $visitante)
    {
        $this->visitante = $visitante;
        return $this;
    }
}
