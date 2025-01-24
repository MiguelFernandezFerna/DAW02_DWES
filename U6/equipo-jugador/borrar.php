<?php
require_once "bootstrap.php";
require_once './src/Equipo.php';
$id = $_GET['id'];
/*buscar el jugador con el id indicado*/
$equipo = $entityManager->find("Equipo", $id);
if(!$equipo){
	echo "Equipo no encontrado";
}else{
	$entityManager->remove($equipo);
	$entityManager->flush();
	echo "Equipo borrado";
<<<<<<< HEAD
}
=======
}
>>>>>>> c3e8c24d23d766ceb02ef302cbdda708f8db2c75
