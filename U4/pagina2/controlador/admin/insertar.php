<?php
    include("../../config/conexion.php");
    $conexion = conexion();

    include("../../vista/admin/visualizarDatosAdmin.php");

    try{
        $titulo=$_POST["titulo"];
        $curso=$_POST["curso"];
        $periodo=$_POST["periodo"];
        $descripcion=$_POST["descripcion"];
        $fecha_presentacion=$_POST["fecha_presentacion"];
        $nota=$_POST["nota"];
        $logotipo=file_get_contents($_FILES["logotipo"]['tmp_name']);
        $modulo1 = $_POST["modulo1"];
        $modulo2 = $_POST["modulo2"];
        $modulo3 = $_POST["modulo3"];
        $alumno = $_POST["alumno"];
        $tutor = $_POST["tutor"];
        $completado = 0;
        $pdf_proyecto = pdf_conversion($conexion,$_FILES,$_POST);

        $sql = "insert into proyecto (titulo, curso, periodo, descripcion, fecha_presentacion, nota, logotipo, pdf_proyecto, modulo1, modulo2, modulo3, alumno, tutor, completado) values (:titulo, :curso, :periodo, :descripcion, :fecha_presentacion, :nota, :logotipo, :pdf_proyecto, :modulo1, :modulo2, :modulo3, :alumno, :tutor, :completado)";
        $sentencia = $conexion->prepare($sql);

        echo pdf_conversion($conexion,$_FILES,$_POST);
        $sentencia->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $sentencia->bindParam(':curso', $curso, PDO::PARAM_STR);
        $sentencia->bindParam(':periodo', $periodo, PDO::PARAM_STR);
        $sentencia->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $sentencia->bindParam(':fecha_presentacion', $fecha_presentacion, PDO::PARAM_STR);
        $sentencia->bindParam(':nota', $nota, PDO::PARAM_INT);
        $sentencia->bindParam(':logotipo', $logotipo, PDO::PARAM_LOB);
        $sentencia->bindParam(':pdf_proyecto',$pdf_proyecto , PDO::PARAM_STR);
        $sentencia->bindParam(':modulo1',$modulo1,PDO::PARAM_INT);
        $sentencia->bindParam(':modulo2',$modulo2,PDO::PARAM_INT);
        $sentencia->bindParam(':modulo3',$modulo3,PDO::PARAM_INT);
        $sentencia->bindParam(':alumno',$alumno,PDO::PARAM_STR);
        $sentencia->bindParam(':tutor', $tutor,PDO::PARAM_STR);
        $sentencia->bindParam(':completado', $completado,PDO::PARAM_INT);

        //Ejecuto la consulta
        $resultado=$sentencia->execute();
                header("Location: ../../vista/admin/paginaAdmin.php");
                

        if($resultado==true){
            echo "Datos insertados";
        }
        }
        catch(PDOException $e){
            echo "ERROR: ".$e->getMessage();
        }
