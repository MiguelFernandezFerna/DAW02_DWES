<?php
    //usamos en bindParam para hacer cambios por referencia
    include ("conexionPDO.php");
    $conexion = conexion();

    //:valor es lo mismo que la ?
    $sql = "insert into persona (nombre, apellidos) values (:nombre, :apellidos)";

    $sentencia = $conexion -> prepare($sql);

    $nombre = "Gerard";
    $apellidos = "Romero";

    //vinculamos parámetros con el bind param
    $sentencia->bindValue(':nombre', $nombre, PDO::PARAM_STR);
    $sentencia->bindValue(':apellidos', $apellidos, PDO::PARAM_STR);

    //ejecutamos
    $sentencia->execute();

    echo "Datos insertados";
