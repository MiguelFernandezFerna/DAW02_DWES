<?php
    include ("conexionPDO.php");
    $conexion = conexion();

    $sql = "select * from persona";

    $sentencia = $conexion -> prepare($sql);
    $sentencia -> setFetchMode(PDO::FETCH_OBJ);
    $sentencia->execute();

    while ($t = $sentencia -> fetch()) {
        echo "ID: ".$t -> id_persona. "<br/>";
        echo "Título: ".$t -> nombre. "<br/>";
    }