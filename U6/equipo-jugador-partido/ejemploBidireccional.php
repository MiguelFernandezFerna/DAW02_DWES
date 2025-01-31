<?php
require_once "bootstrap.php";
require_once './src/Entity/PartidoBidireccional.php';
require_once './src/Entity/EquipoBidireccional.php';

$id = $_GET['id'];

// Buscar el partido con el ID indicado
$partido = $entityManager->find("PartidoBidireccional", $id);

if (!$partido) {
    echo "Partido no encontrado";
} else {
    echo "Detalles del partido:" . "<br>";
    echo "Fecha: " . $partido->getFecha()->format('Y-m-d') . "<br>";
    echo "Goles Local: " . $partido->getGolesLocal() . "<br>";
    echo "Goles Visitante: " . $partido->getGolesVisitante() . "<br><br>";

    $equipoLocal = $partido->getLocal();
    $equipoVisitante = $partido->getVisitante();
    
    echo "Equipo Local: " . $equipoLocal->getNombre() . "<br>";
    echo "Ciudad: " . $equipoLocal->getCiudad() . "<br>";
    echo "Estadio: " . $equipoLocal->getEstadio() . "<br><br>";
    
    echo "Equipo Visitante: " . $equipoVisitante->getNombre() . "<br>";
    echo "Ciudad: " . $equipoVisitante->getCiudad() . "<br>";
}
