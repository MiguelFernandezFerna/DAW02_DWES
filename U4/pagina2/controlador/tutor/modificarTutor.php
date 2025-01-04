<?php
    include("../../config/conexion.php");
    $conexion = conexion();
    $idTutor = $_POST["id_tutor"];
    $login = $_POST["login"];
    $correo = $_POST["correo"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];

    //sentencia sql para actualizar
    try {
        $sql = "update tutor set login = :login, correo = :correo, nombre = :nombre, apellidos = :apellidos where id_tutor = :id_tutor";
        $sentencia = $conexion->prepare($sql);
        //vinculamos los parámetros
        $sentencia->bindParam(':id_tutor', $idTutor,PDO::PARAM_STR);
        $sentencia->bindParam(':login', $login,PDO::PARAM_STR);
        $sentencia->bindParam(':correo', $correo,PDO::PARAM_STR);
        $sentencia->bindParam(':nombre', $nombre,PDO::PARAM_STR);
        $sentencia->bindParam(':apellidos', $apellidos,PDO::PARAM_STR);
        //ejecutamos
        $resultado = $sentencia->execute();
        if ($resultado) {
            header("Location: ../../vista/tutor/paginaTutor.php");
        }
    } catch (PDOException $e) {
        echo $e ->getMessage();
    }
    $conexion=null;