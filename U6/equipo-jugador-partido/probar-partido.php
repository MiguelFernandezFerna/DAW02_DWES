<?php
// probar-partido.php
require_once "bootstrap.php";
require_once './src/Entity/Partido.php';
require_once './src/Entity/Equipo.php';
require_once './src/Entity/Jugador.php';
require_once './src/Entity/PartidoRepository.php';

$jugadores = $entityManager->getRepository('Partido')->getPartidosPorEquipo(1);
if($jugadores === -1){
	echo "Equipo no encontrado";
}else {
    foreach($jugadores as $partido) {
        $equipo = $partido->getLocal();
        $equipo2 = $partido->getVisitante();
        echo "ID del partido: ". $partido->getIdPartido()."<br>";
        echo "Nombre del equipo local: ".$equipo->getNombre()."<br>";
        echo "Goles local: ". $partido->getGolesLocal(). "<br>";
        echo "Goles visitante: ". $partido->getGolesVisitante(). "<br>";
        echo "Nombre del equipo local: ".$equipo2->getNombre()."<br>";
        echo "----------------------------------------<br>";
    }
    echo "Total de partidos: ". count($jugadores). "<br>";
}
