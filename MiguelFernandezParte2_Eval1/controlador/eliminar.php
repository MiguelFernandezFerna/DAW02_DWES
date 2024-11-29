<?php
    include("../config/conexion.php");
    $conexion = conexion();

    try {
    $sql = "delete from tareas where id_tarea = :id_tareas";

    $sentencia = $conexion->prepare($sql);

    $id_tareas = $_GET["id_tarea"];

    $sentencia ->bindParam(':id_tareas', $id_tareas,PDO::PARAM_INT);

    //igual da un pequeño error, que se queda la pantalla en blanco, vuelve para atras, recarga, y veras como se ha eliminado
    $result = $sentencia->execute();
    header("Location: ../vista/visualizarTareas.php");
    } catch (PDOException $e) {
        echo "ERROR: ".$e->getMessage();
    }
    $conexion=null;