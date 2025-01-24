<?php
  require_once "bootstrap.php";
  require_once './src/Entity/Equipo.php';
  require_once './src/Entity/Jugador.php';
  //$id = $_GET['id'];
  /*buscar el jugador con el id indicado*/
  $jugador = $entityManager->find("Jugador", 2);
  if(!$jugador){
    echo "Jugador no encontrado";
  }else{
    echo "Nombre del jugador: ". $jugador->getNombre()."<br>";
    echo "Apellidos del jugador: ". $jugador->getApellidos()."<br>";
    echo "Edad del jugador: ". $jugador->getEdad()."<br><br>";

    $equipo = $jugador->getEquipo();
    echo "Nombre del equipo: ". $equipo->getNombre();
    echo "<br>";
    echo "Número de socios: ". $equipo->getSocios();
    echo "<br>";
    echo "Año de fundación: ". $equipo->getFundacion();
    echo "<br>";
    echo "Ciudad: ". $equipo->getCiudad();

<<<<<<< HEAD
  }
=======
  }
>>>>>>> c3e8c24d23d766ceb02ef302cbdda708f8db2c75
