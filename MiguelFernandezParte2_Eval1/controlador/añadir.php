<?php
    include("../config/conexion.php");
    $conexion = conexion();

    try{
        $titulo=$_POST["titulo"];
        $descripcion=$_POST["descripcion"];
        $fecha=$_POST["fecha"];
        $prioridad = $_POST["prioridad"];
        $imagen=file_get_contents($_FILES["imagen"]['tmp_name']);
        $realizada = $_POST["realizada"];
        $sql = "insert into tareas (titulo, descripcion, fecha, prioridad, img_tarea, realizada) values (:titulo, :descripcion, :fecha, :prioridad, :img_tarea, :realizada)";
        $sentencia = $conexion->prepare($sql);

        $sentencia->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $sentencia->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $sentencia->bindParam(':fecha', $fecha, PDO::PARAM_STR);
        $sentencia->bindParam(':prioridad', $prioridad, PDO::PARAM_INT);
        $sentencia->bindParam(':img_tarea',$imagen,PDO::PARAM_LOB);
        $sentencia->bindParam(':realizada',$realizada,PDO::PARAM_STR);

        //Ejecuto la consulta
        $resultado=$sentencia->execute();
                header("Location:../vista/listarTareas.php");

        if($resultado==true){
            echo "Datos insertados";
        }
        }
        catch(PDOException $e){
            echo "ERROR: ".$e->getMessage();
        }
