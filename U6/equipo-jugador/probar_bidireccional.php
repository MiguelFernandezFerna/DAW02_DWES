<?php
require_once "bootstrap.php";
require_once './src/Entity/EquipoBidireccional.php';
require_once './src/Entity/JugadorBidireccional.php';
$id = $_GET['id'];
/*buscar el jugador con el id indicado*/
$equipo = $entityManager->find("EquipoBidireccional", $id);
if(!$equipo){
	echo "Equipo no encontrado";
}else{
	echo "Nombre del equipo: ". $equipo->getNombre()."<br>";
	echo "Socios: ". $equipo->getSocios()."<br>";
	echo "Año fundación: ". $equipo->getFundacion()."<br>";
	echo "Ciudad: ". $equipo->getCiudad()."<br><br>";
	$jugadores = $equipo->getJugadores();
	echo "Lista de jugadores:"."<br>";
	foreach($jugadores as $jugador){	
	echo "Nombre del jugador: ". $jugador->getNombre()."<br>";
    echo "Apellidos del jugador: ". $jugador->getApellidos()."<br>";
    echo "Edad del jugador: ". $jugador->getEdad()."<br><br>";
	}
	echo "<br><br>";
<<<<<<< HEAD
}
=======
}
>>>>>>> c3e8c24d23d766ceb02ef302cbdda708f8db2c75
