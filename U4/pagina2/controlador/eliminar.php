<?php
    include("../config/conexion.php");
    $conexion = conexion();

    try {
    $sql = "delete from proyecto where id_proyecto = :id_proyecto";

    $sentencia = $conexion->prepare($sql);

    $id_proyecto = $_GET["id_proyecto"];

    $sentencia ->bindParam(':id_proyecto', $id_proyecto,PDO::PARAM_INT);

    $result = $sentencia->execute();
    header("Location: ../vista/admin/paginaAdmin.php");
    } catch (PDOException $e) {
        echo "ERROR: ".$e->getMessage();
    }
    $conexion=null;