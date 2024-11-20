<?php
    include("../config/conexion.php");
    $conexion = conexion();
    
    $id_proyecto = $_POST["id_proyecto"];
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $periodo = $_POST["periodo"];
    $curso = $_POST["curso"];
    $fecha_presentacion = $_POST["fecha_presentacion"];
    $nota = $_POST["nota"];
    $logotipo = $_POST["logotipo"];
    $proyecto_pdf = $_POST["pdf_proyecto"];

    //sentencia sql para actualizar
    try {
        $sql = "update proyecto set titulo = :titulo, descripcion = :descripcion, periodo = :periodo, curso = :curso, fecha_presentacion = :fecha_presentacion, nota = :nota, logotipo = :logotipo, pdf_proyecto = :pdf_proyecto where id_proyecto = :id_proyecto";
        $sentencia = $conexion->prepare($sql);
        //vinculamos los parámetros
        $sentencia->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $sentencia->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $sentencia->bindParam(':periodo',$periodo,PDO::PARAM_STR);
        $sentencia->bindParam(':curso',$curso,PDO::PARAM_STR);
        $sentencia->bindParam(':fecha_presentacion',$fecha_presentacion,PDO::PARAM_STR);
        $sentencia->bindParam(':nota',$nota,PDO::PARAM_INT);
        $sentencia->bindParam(':logotipo',$logotipo,PDO::PARAM_LOB);
        $sentencia->bindParam(':pdf_proyecto',$proyecto_pdf,PDO::PARAM_STR);
        //ejecutamos
        $resultado = $sentencia->execute();
        if ($resultado) {
            header("Location: ../vista/listar_proyecto.php");
        }
    } catch (PDOException $e) {
        echo $e ->getMessage();
    }
    $conexion=null;