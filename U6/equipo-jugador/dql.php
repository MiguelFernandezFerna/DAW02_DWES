<?php
    require_once "bootstrap.php";
    require_once './src/Entity/Equipo.php';
    require_once './src/Entity/Jugador.php';

    $consulta = $entityManager->createQuery('SELECT j FROM jugador j');
    $arrayCollection = $consulta->getResult();
    echo "Todos los jugadores:<br><br>";
    foreach ($arrayCollection as $array) {
        echo $array->getNombre()." ".$array->getApellidos()." - ";
        echo "Edad: ". $array->getEdad(). "<br>";
        echo "Equipo: ". $array->getEquipo()->getNombre(). "<br>";
    }
    echo "--------------------------------------------------<br>";
    echo "Jugadores mayores de 30 años:<br><br>";
    
    $consulta2 = $entityManager->createQuery('SELECT j.nombre FROM jugador j WHERE j.edad > 30');
    $arrayCollection2 = $consulta2->getResult();

    foreach ($arrayCollection2 as $array) {
        echo $array["nombre"]."<br>";
    }
    echo "--------------------------------------------------<br>";
    
    echo "Número de jugadores que hay mayores de 30 años:<br><br>";
    $consulta3 = $entityManager->createQuery('SELECT COUNT(j.idJugador) FROM jugador j WHERE j.edad > 30');

    $arrayCollection3 = $consulta3->getSingleScalarResult();
    echo "Número: ".$arrayCollection3."<br>";

    echo "--------------------------------------------------<br>";
    echo "Jugadores totales ordenados por edad ascendente:<br><br>";
    $consulta4 = $entityManager->createQuery('SELECT j FROM jugador j ORDER BY j.edad ASC');
    $arrayCollection4 = $consulta4->getResult();
    foreach ($arrayCollection4 as $array) {
        echo $array->getNombre()." ".$array->getApellidos()." - ";
        echo "Edad: ". $array->getEdad(). "<br>";
        echo "Equipo: ". $array->getEquipo()->getNombre(). "<br>";
    }
    echo "--------------------------------------------------<br>";
    echo "Jugadores mayores de 30 años previniendo inyección sql:<br><br>";
    //añadimos nuevas cosas para prevenir inyeccion sql
    //En este caso la edad
    $edad = 30;
    //Antes era asi: 
    // $consulta2 = $entityManager->createQuery('SELECT j.nombre FROM jugador j WHERE j.edad > 30');
    $consulta5 = $entityManager->createQuery('SELECT j.nombre FROM jugador j WHERE j.edad > :edad');
    $consulta5->setParameter('edad', $edad);  //para prevenir inyeccion sql
    $arrayCollection5 = $consulta5->getResult();

    foreach ($arrayCollection5 as $array) {
        echo $array["nombre"]."<br>";
    }
    echo "--------------------------------------------------<br>";
    $edad2 = 30;
    echo "Número de jugadores que hay mayores de 30 años con prevención de inyeccion sql:<br><br>";
    $consulta6 = $entityManager->createQuery('SELECT COUNT(j.idJugador) FROM jugador j WHERE j.edad > :edad');
    $consulta6->setParameter('edad', $edad2);  //para prevenir inyeccion sql
    $arrayCollection6 = $consulta6->getSingleScalarResult();
    echo "Número: ".$arrayCollection6."<br>";

    echo "--------------------------------------------------<br>";
    echo "Consulta con varias tablas unidas con join:<br><br>";
    $consulta7 = $entityManager->createQuery('SELECT j.nombre as jugador, e.nombre as equipo FROM jugador j JOIN j.equipo e');
    $arrayCollection7 = $consulta7->getResult();
    foreach ($arrayCollection7 as $array) {
        echo $array["jugador"]." - Equipo: ".$array["equipo"]."<br>";
    }

    echo "--------------------------------------------------<br>";
    echo "Consulta que devuelve los nombres de los jugadores de la ciudad de Madrid:<br><br>";
    $ciudad = "Madrid";
    $consulta8 = $entityManager->createQuery('SELECT j.nombre as jugador FROM jugador j JOIN j.equipo e WHERE e.ciudad = :ciudad');
    $consulta8->setParameter('ciudad', $ciudad);  //para prevenir inyeccion sql
    $arrayCollection8 = $consulta8->getResult();
    foreach ($arrayCollection8 as $array) {
        echo $array["jugador"]."<br>";
    }

    echo "--------------------------------------------------<br>";
    echo "Aumentamos en 1 la edad de todos los jugadores donde su edad sea mayor de 20: <br><br>";
    $edad3 = 20;
    $consulta9 = $entityManager->createQuery('UPDATE jugador j SET j.edad = j.edad + 1 WHERE j.edad > :edad');
    $consulta9->setParameter('edad', $edad3);  //para prevenir inyeccion sql
    if ($filasAfectadas = $consulta9->execute()) {
        echo "Se ha ejecutado:";
    }