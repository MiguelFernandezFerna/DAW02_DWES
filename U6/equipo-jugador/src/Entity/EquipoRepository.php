<?php

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class EquipoRepository extends \Doctrine\ORM\EntityRepository{

    protected EntityManager $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;

    }

    public function getLista($nombre_equipo) {
        //consulta que devuelve una coleccion con los jugadores del equipo
        // -1 si no encuentra el equipo
        $query = $this->entityManager->createQuery("SELECT j FROM jugador j JOIN j.equipo e WHERE e.nombre = :nombre_equipo");
        $query->setParameter('nombre_equipo', $nombre_equipo);

        if (!$query->getResult()) {
            return -1;  //no encuentra el equipo
        }else{
            return $query->getResult();  //devuelve la coleccion de jugadores del equipo
        }
    }
}