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
public function getNombreEdad($edad_equipo) {
    $consulta5 = $this->entityManager->createQuery('SELECT j.nombre FROM jugador j WHERE j.edad > :edad');
    $consulta5->setParameter('edad', $edad_equipo);  //para prevenir inyeccion sql

    if (!$consulta5->getResult()) {
        return -1;  //no encuentra el equipo
    }else{
        return $consulta5->getResult();  //devuelve la coleccion de jugadores del equipo
    }
}

public function getListaTablas() {
    $consulta7 = $this->entityManager->createQuery('SELECT j.nombre as jugador, e.nombre as equipo FROM jugador j JOIN j.equipo e');
    if (!$consulta7->getResult()) {
        return -1; 
    } else {
        return $consulta7->getResult();
    }
    
}

}