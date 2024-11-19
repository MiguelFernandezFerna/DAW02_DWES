<?php
    include ("conexionPDO.php");
    $conexion = conexion();

    $sql = "delete from persona where nombre = :nombre";

    $sentencia = $conexion->prepare($sql);

    $nombre = "Willy";

    $sentencia ->bindParam(':nombre', $nombre,PDO::PARAM_STR);

    $result = $sentencia->execute();
    echo "Usuario eliminado";
    $conexion=null;