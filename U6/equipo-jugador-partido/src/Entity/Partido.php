<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Partido
 *
 * @ORM\Table(name="partido", indexes={@ORM\Index(name="partido_equipo_FK", columns={"local"}), @ORM\Index(name="partido_equipo_FK_1", columns={"visitante"})})
 * @ORM\Entity
 */
class Partido
{
    /**
     * @var bool
     *
     * @ORM\Column(name="id_partido", type="boolean", nullable=false)
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
     * @ORM\Column(name="fehca", type="date", nullable=true)
     */
    private $fehca;

    /**
     * @var \Equipo
     *
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="local", referencedColumnName="id_equipo")
     * })
     */
    private $local;

    /**
     * @var \Equipo
     *
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="visitante", referencedColumnName="id_equipo")
     * })
     */
    private $visitante;


}
