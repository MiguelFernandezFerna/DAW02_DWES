<?php
    include("../config/conexion.php");

    $conexion = conexion();
    $dni = $_POST["dni"];
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $curso = $_POST["curso"];

    $consultaInsert=$conexion->prepare("insert into alumnos(dni, nombre, apellido1, apellido2, email, telefono, curso) value(?,?,?,?,?,?,?)");

    $consultaInsert->bind_param("sssssis", $dni,$nombre,$apellido1,$apellido2,$email,$telefono,$curso);

    if ($consultaInsert->execute()) {
        header("Location: ../vista/CRUD_principal.php");
    } else {
        echo "Error al insertar";
    }

    $conexion->close();
