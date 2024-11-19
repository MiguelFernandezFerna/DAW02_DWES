<?php
    //usamos en bindParam para hacer cambios por referencia
    include ("conexionPDO.php");
    $conexion = conexion();

    //:valor es lo mismo que la ?
    $sql = "insert into persona (nombre, apellidos) values (:nombre, :apellidos)";

    $sentencia = $conexion -> prepare($sql);

    $nombre = "Mark";
    $apellidos = "Evans";

    //vinculamos parámetros con el bind param
    $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $sentencia->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);

    //ejecutamos
    $sentencia->execute();

    echo "Datos insertados";
