<?php

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class PartidoRepository extends EntityRepository {

    protected EntityManager $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }
    // Consulta: Todos los partidos en los que un equipo participó, ya sea como local o visitante
    public function getPartidosPorEquipo($equipoId) {
        $query = $this->entityManager->createQuery(
            "SELECT p FROM Partido p 
            WHERE p.local = :equipoId OR p.visitante = :equipoId"
        );
        $query->setParameter('equipoId', $equipoId);
        if (!$query->getResult()) {
            return -1;  //no encuentra el equipo
        }else{
            return $query->getResult();  //devuelve la coleccion de jugadores del equipo
        }
    }
    // Consulta: Todos los partidos de un equipo en una fecha específica
    public function getPartidosEquipoYfecha($equipoId, $fecha) {
        $query = $this->entityManager->createQuery(
            "SELECT p FROM Partido p 
            WHERE (p.local = :equipoId OR p.visitante = :equipoId) 
            AND p.fecha = :fecha"
        );
        $query->setParameter('equipoId', $equipoId);
        $query->setParameter('fecha', $fecha);

        if (!$query->getResult()) {
            return -1;  //no encuentra el equipo
        }else{
            return $query->getResult();  //devuelve la coleccion de jugadores del equipo
        }
    }

    // Consulta: Todos los partidos en un rango de fechas
    // Consulta: Todos los partidos de un equipo (como local o visitante)
    public function getPartidosEquipo($equipoId) {
        $query = $this->entityManager->createQuery(
            "SELECT p FROM App\Entity\Partido p 
            WHERE p.local = :equipoId OR p.visitante = :equipoId"
        );
        $query->setParameter('equipoId', $equipoId);

        if (!$query->getResult()) {
            return -1;  //no encuentra el equipo
        }else{
            return $query->getResult();  //devuelve la coleccion de jugadores del equipo
        }
    }




}
