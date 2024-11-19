<?php
    include ("conexionPDO.php");
    $conexion = conexion();

    $sql = "select * from persona";

    $sentencia = $conexion -> prepare($sql);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();

    $personas = $sentencia -> fetchAll();

    foreach ($personas as $persona) {
        echo "ID: ".$persona["id_persona"] . "<br/>";
        echo "Título: ".$persona["nombre"] . "<br/>";
    }