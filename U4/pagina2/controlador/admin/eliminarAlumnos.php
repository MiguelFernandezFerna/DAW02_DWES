<?php
    include("../../config/conexion.php");
    $conexion = conexion();

    try {
    $sql = "delete from alumnos where id_alumno = :id_alumno";

    $sentencia = $conexion->prepare($sql);

    $id_alumno = $_GET["id_alumno"];

    $sentencia ->bindParam(':id_alumno', $id_alumno,PDO::PARAM_INT);

    $result = $sentencia->execute();
    header("Location: ../../vista/admin/paginaAdmin.php");
    } catch (PDOException $e) {
        echo "ERROR: ".$e->getMessage();
    }
    $conexion=null;