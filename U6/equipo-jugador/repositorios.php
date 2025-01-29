<?php
// repositorios.php
require_once "bootstrap.php";
require_once './src/Entity/Equipo.php';
require_once './src/Entity/Jugador.php';
require_once './src/Entity/EquipoRepository.php';
// require_once './src/Entity/Jugador.php';

/*usar el repositorio*/
$jugadores = $entityManager->getRepository('Equipo')->getLista("Real Madrid");
if($jugadores === -1)
{
	echo "Equipo no encontrado";
	}else
	{
		foreach($jugadores as $jugador)
		{
			echo "Nombre: ". $jugador->getNombre(). " ". $jugador->getApellidos(). "<br>";
		}
}
echo"<br>";
	
	$jugadores = $entityManager->getRepository('Equipo')->getLista("Manchester City");
	if($jugadores === -1)
	{
		echo "Equipo no encontrado";
	}
	else{
		foreach($jugadores as $jugador)
		{
			echo "Nombre: ". $jugador->getNombre(). " ". $jugador->getApellidos(). "<br>";
		}
}
echo"<br>";
	
	$jugadores = $entityManager->getRepository('Equipo')->getNombreEdad(29);
	if($jugadores === -1)
	{
		echo "Equipo no encontrado";
	}
	else{
		foreach($jugadores as $jugador)
		{
			echo "Nombre: ". $jugador["nombre"]."<br>";
		}
}
echo"<br>";
	
	$jugadores = $entityManager->getRepository('Equipo')->getListaTablas();
	if($jugadores === -1)
	{
		echo "Equipo no encontrado";
	}
	else{
		foreach($jugadores as $jugador)
		{
			echo "Nombre: ". $jugador["jugador"]." - Equipo: ".$jugador["equipo"]."<br>";
		}
}
