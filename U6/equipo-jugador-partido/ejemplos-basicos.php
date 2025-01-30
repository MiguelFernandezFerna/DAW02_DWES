<?php
// ejemplo_basicos.php
require_once "bootstrap.php";
require_once './src/Entity/Equipo.php';
require_once './src/Entity/Jugador.php';
require_once './src/Entity/Partido.php';
// buscar por clave primaria
$eq = $entityManager->find("Equipo", 1);
// mostrar datos
echo $eq->getSocios()."<br>";
// cambiar el número de socios
// $eq->setSocios(70000);
// GUARDAR CAMBIOS EN BASE DE DATOS
$entityManager->flush();
// si el equipo no existe devuelve null
$eq = $entityManager->find("Equipo", 8);
if(!$eq){
	echo "Equipo no encontrado";
}
echo "<br><br>";
//PARTE DE JUGADOR
$eq = $entityManager->find("Jugador", 1);
// mostrar datos
echo $eq->getNombre()."--".$eq->getApellidos()."--".$eq->getEdad()."<br>";
// cambiar el número de socios
// $eq->setSocios(70000);
// GUARDAR CAMBIOS EN BASE DE DATOS
$entityManager->flush();
// si el equipo no existe devuelve null
$eq = $entityManager->find("Jugador", 8);
if(!$eq){
	echo "Jugador no encontrado";
}
echo "<br><br>";
//PARTE DE PARTIDO
$eq = $entityManager->find("Partido", 1);
// mostrar datos
$equipo1 = $eq->getLocal();
$equipo2 = $eq->getVisitante();
echo "El partido jugado entre el ".$equipo1->getNombre()." 
y ".$equipo2->getNombre()." ha tenido un resultado de: <br>";

echo $eq->getGolesLocal()."--".$eq->getGolesVisitante()."<br>";
// cambiar el número de socios
// $eq->setSocios(70000);
// GUARDAR CAMBIOS EN BASE DE DATOS
$entityManager->flush();
// si el equipo no existe devuelve null
$eq = $entityManager->find("Partido", 8);
if(!$eq){
	echo "Partido no encontrado";
}
