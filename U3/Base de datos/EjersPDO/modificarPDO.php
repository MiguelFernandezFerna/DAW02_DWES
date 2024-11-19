<?php
    include ("conexionPDO.php");
    $conexion = conexion();

    $nombre_old = "Mark";
    $nombre_new = "Falillo";
    //sentencia sql para actualizar
    try {
        $sql = "update persona set nombre = :nombre_new where nombre = :nombre_old";
        $sentencia = $conexion->prepare($sql);
        //vinculamos los parámetros
        $sentencia->bindParam(':nombre_old', $nombre_old, PDO::PARAM_STR);
        $sentencia->bindParam(':nombre_new', $nombre_new, PDO::PARAM_STR);
        //ejecutamos
        $resultado = $sentencia->execute();
        if ($resultado) {
            echo "Ha sido ejecutado correctamente";
        }
    } catch (PDOException $e) {
        echo $e ->getMessage();
    }
    $conexion=null;