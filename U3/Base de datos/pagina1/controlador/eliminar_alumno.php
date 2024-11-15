<?php
    include("../config/conexion.php");

    $conexion = conexion();
    $id_alumno = $_GET["id_alumno"];
    $eliminar = $conexion->prepare("delete from alumnos where id_alumno = ?");
    $eliminar ->bind_param("i",$id_alumno);
    $eliminar->execute();

    header("Location: ../vista/CRUD_principal.php");

    $conexion->close();
