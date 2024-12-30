<?php
    include("../config/conexion.php");
    $conexion = conexion();
    
    $id_alumno = $_POST["id_alumno"];
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $curso = $_POST["curso"];

    //sentencia sql para actualizar
    try {
        $sql = "update alumnos set nombre = :nombre, apellido1 = :apellido1, apellido2 = :apellido2, email = :email, telefono = :telefono, curso = :curso where id_alumno = :id_alumno";
        $sentencia = $conexion->prepare($sql);
        //vinculamos los parámetros
        $sentencia->bindParam(':id_alumno', $id_alumno,PDO::PARAM_STR);
        $sentencia->bindParam(':nombre', $nombre,PDO::PARAM_STR);
        $sentencia->bindParam(':apellido1', $apellido1,PDO::PARAM_STR);
        $sentencia->bindParam(':apellido2', $apellido2,PDO::PARAM_STR);
        $sentencia->bindParam(':email', $email,PDO::PARAM_STR);
        $sentencia->bindParam(':telefono', $telefono,PDO::PARAM_INT);
        $sentencia->bindParam(':curso', $curso,PDO::PARAM_STR);
        //ejecutamos
        $resultado = $sentencia->execute();
        if ($resultado) {
            header("Location: ../vista/paginaAdmin.php");
        }
    } catch (PDOException $e) {
        echo $e ->getMessage();
    }
    $conexion=null;