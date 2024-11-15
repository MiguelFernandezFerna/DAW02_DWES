<?php
    include("../config/conexion.php");

    $conexion = conexion();

    $id_alumno=$_POST["id_alumno"];
    $dni = $_POST["dni"];
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $curso = $_POST["curso"];

    $actualizar = $conexion->prepare("update alumnos set dni = ?, nombre = ?, apellido1=?, apellido2 = ?, email = ?, telefono = ?, curso = ? where id_alumno = ?");
    //Importante, ponerlo todo en el mismo orden
    $actualizar->bind_param("sssssisi", $dni,$nombre,$apellido1,$apellido2,$email,$telefono,$curso,$id_alumno);
    $actualizar->execute();

    if ($actualizar) {
        header("Location: ../vista/listar_alumnos.php");
    }else{
        echo "No se ha ejecutado";
    }

    $conexion->close();