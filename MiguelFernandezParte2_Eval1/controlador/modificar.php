<?php
    include("../config/conexion.php");
    $conexion = conexion();
    
    $id_tarea = $_POST["id_tarea"];
    $descripcion = $_POST["descripcion"];
    $realizada = $_POST["realizada"];

    //sentencia sql para actualizar
    try {
        $sql = "update tareas set descripcion = :descripcion, realizada = :realizada where id_tarea = :id_tarea";
        $sentencia = $conexion->prepare($sql);
        //vinculamos los parámetros
        $sentencia->bindParam(':id_tarea',$id_tarea, PDO::PARAM_INT);
        $sentencia->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $sentencia->bindParam(':realizada',$realizada,PDO::PARAM_STR);
        //ejecutamos
        $resultado = $sentencia->execute();
        if ($resultado) {
            header("Location: ../vista/listarTareas.php");
        }
    } catch (PDOException $e) {
        echo $e ->getMessage();
    }
    $conexion=null;