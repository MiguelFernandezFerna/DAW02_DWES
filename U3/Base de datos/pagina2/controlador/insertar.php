<?php
    include("../config/conexion.php");
    $conexion = conexion();

    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $periodo = $_POST["periodo"];
    $curso = $_POST["curso"];
    $fecha_presentacion = $_POST["fecha_presentacion"];
    $nota = $_POST["nota"];
    $logotipo = $_POST["logotipo"];

    $consultaInsert=$conexion->prepare("insert into proyecto(titulo,descripcion,periodo, curso,fecha_presentacion, nota, logotipo, pdf_proyecto) value(:titulo,:descripcion,:periodo,:curso,:fecha_presentacion,:nota,:logotipo,:pdf_proyecto)");

    $consultaInsert->bindParam(':titulo', $titulo, PDO::PARAM_STR);
    $consultaInsert->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
    $consultaInsert->bindParam(':periodo',$periodo,PDO::PARAM_STR);
    $consultaInsert->bindParam(':curso',$curso,PDO::PARAM_STR);
    $consultaInsert->bindParam(':fecha_presentacion',$curso,PDO::PARAM_STR);
    $consultaInsert->bindParam(':nota',$nota,PDO::PARAM_INT);
    $consultaInsert->bindParam(':LOGOTIPO',$curso,PDO::PARAM_LOB);


    if ($consultaInsert->execute()) {
        header("Location: ../vista/listar_proyecto.php");
    } else {
        echo "Error al insertar";
    }

    $conexion->close();
