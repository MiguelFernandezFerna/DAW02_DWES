<?php
require_once "bootstrap.php";
require_once './src/Entity/Jugador.php';
require_once './src/Entity/Equipo.php';

/*Con findBy/findOneBy:
- Jugadores con exactamente XX años..*/
echo "Jugadores con 12 años<br>";
$jugadores = $entityManager->getRepository('Jugador')->findBy(array('edad' => 12));

foreach($jugadores as $jugador)
{
	echo "Nombre: ". $jugador->getNombre(). " ". $jugador->getApellidos(). "<br>";

}

//Equipos de Madrid fundados en 1900.
echo "Equipos de Madrid fundados en 1900<br>";
$equipos = $entityManager->getRepository('Equipo')->findBy(array('fundacion' => 1900, 'ciudad'=>'Madrid'));
foreach($equipos as $equipo)
{
	echo "Nombre: ". $equipo->getNombre()."<br>";

}

/**Equipo cuyo nombre es "Real Madrid"*/
echo "Equipos cuyo nombre es 'Real Madrid'<br>";
$equipo = $entityManager->getRepository('Equipo')->findOneBy(array('nombre' => 'Real Madrid'));
echo "Nombre: ". $equipo->getNombre(). " ". $equipo->getFundacion(). " ". $equipo->getCiudad()."<br><br>";

//Mostrar los equipos de una ciudad pasada por parámetro usando primero findBy
//luego findOneBy y por ultimo findAll

$ciudad = $_GET['ciudad'];
echo "Equipos de la ciudad $ciudad con findBy: <br>";
$equipos = $entityManager->getRepository('Equipo')->findBy(array('ciudad' => $ciudad));

foreach($equipos as $equipo){
	echo "Nombre: ". $equipo->getNombre(). "<br>";
	echo "Fundacion: ". $equipo->getFundacion(). "<br>";
	echo "Socios: ". $equipo->getSocios(). "<br><br>";
}

//Mostrar los equipos de una ciudad pasada por parámetro usando findOneBy

echo "Equipo de la ciudad $ciudad con findOneBy: <br>";
$equipo = $entityManager->getRepository('Equipo')->findOneBy(array('ciudad' => $ciudad));
if($equipo){
    echo "Nombre: ". $equipo->getNombre(). "<br>";
    echo "Fundacion: ". $equipo->getFundacion(). "<br>";
    echo "Socios: ". $equipo->getSocios(). "<br><br>";
}else{
	echo "No hay equipos en la ciudad $ciudad<br>";
}

//Mostrar todos los equipos de una ciudad pasada por parámetro usando findAll

echo "Todos los equipos con findAll: <br>";
$equipos = $entityManager->getRepository('Equipo')->findAll(array('ciudad' => $ciudad));

foreach($equipos as $equipo){
    echo "Nombre: ". $equipo->getNombre(). "<br>";
    echo "Fundacion: ". $equipo->getFundacion(). "<br>";
    echo "Socios: ". $equipo->getSocios(). "<br><br>";
}
