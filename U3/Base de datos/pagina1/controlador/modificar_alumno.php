<?php
    include("../config/conexion.php");

    $conexion = conectar();

    $dni = $_POST["dni"];
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $curso = $_POST["curso"];

    $actualizar = $conexion->prepare("update persona set dni = ?, nombre = ?, apellido1=?, apellido2 = ?, email = ?, telefono = ?, curso = ? where id_alumno = ?");
    //Importante, ponerlo todo en el mismo orden
    $actualizar->bind_param("sssssis", $dni,$nombre,$apellido1,$apellido2,$email,$telefono,$curso);
    $actualizar->execute();

    if ($actualizar) {
        header("Location: CRUD_principal.php");
    }else{
        echo "No se ha ejecutado";
    }

    $conexion->close();