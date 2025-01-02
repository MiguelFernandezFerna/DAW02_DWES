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
    $proyecto_pdf = $_POST["pdf_proyecto"];
    $modulo1 = $_POST["modulo1"];
    $modulo2 = $_POST["modulo2"];
    $modulo3 = $_POST["modulo3"];
    $alumno = $_POST["alumno"];
    $tutor = $_POST["tutor"];

    //sentencia sql para actualizar
    try {
        $sql = "update proyecto set titulo = :titulo, descripcion = :descripcion, periodo = :periodo, curso = :curso, fecha_presentacion = :fecha_presentacion, nota = :nota, pdf_proyecto = :pdf_proyecto, modulo1 = :modulo1, modulo2 = :modulo2, modulo3 = :modulo3, alumno = :alumno, tutor = :tutor where id_proyecto = :id_proyecto";
        $sentencia = $conexion->prepare($sql);
        //vinculamos los parámetros
        $sentencia->bindParam(':id_proyecto',$id_proyecto, PDO::PARAM_INT);
        $sentencia->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $sentencia->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $sentencia->bindParam(':periodo',$periodo,PDO::PARAM_STR);
        $sentencia->bindParam(':curso',$curso,PDO::PARAM_STR);
        $sentencia->bindParam(':fecha_presentacion',$fecha_presentacion,PDO::PARAM_STR);
        $sentencia->bindParam(':nota',$nota,PDO::PARAM_INT);
        $sentencia->bindParam(':pdf_proyecto',$proyecto_pdf,PDO::PARAM_STR);
        $sentencia->bindParam(':modulo1',$modulo1,PDO::PARAM_STR);
        $sentencia->bindParam(':modulo2',$modulo2,PDO::PARAM_STR);
        $sentencia->bindParam(':modulo3',$modulo3,PDO::PARAM_STR);
        $sentencia->bindParam(':alumno',$alumno,PDO::PARAM_STR);
        $sentencia->bindParam(':tutor',$tutor,PDO::PARAM_STR);
        //ejecutamos
        $resultado = $sentencia->execute();
        if ($resultado) {
            header("Location: ../vista/paginaTutor.php");
        }
    } catch (PDOException $e) {
        echo $e ->getMessage();
    }
    $conexion=null;