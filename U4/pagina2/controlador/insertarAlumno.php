<?php
    include("../config/conexion.php");
    $conexion = conexion();

    try{
        $dni=$_POST["dni"];
        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        $apellido2 = $_POST["apellido2"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $curso = $_POST["curso"];
        

        $sql = "insert into alumnos (dni, nombre, apellido1, apellido2, email, telefono, curso) values (:dni, :nombre, :apellido1, :apellido2, :email, :telefono, :curso)";
        $sentencia = $conexion->prepare($sql);

        $sentencia->bindParam(':dni', $dni, PDO::PARAM_STR);
        $sentencia->bindParam(':nombre', $nombre,PDO::PARAM_STR);
        $sentencia->bindParam(':apellido1', $apellido1,PDO::PARAM_STR);
        $sentencia->bindParam(':apellido2', $apellido2,PDO::PARAM_STR);
        $sentencia->bindParam(':email', $email,PDO::PARAM_STR);
        $sentencia->bindParam(':telefono', $telefono,PDO::PARAM_INT);
        $sentencia->bindParam(':curso', $curso,PDO::PARAM_STR);

        //Ejecuto la consulta
        $resultado=$sentencia->execute();
                header("Location:../vista/paginaAdmin.php");

        if($resultado==true){
            echo "Datos insertados";
        }
        }
        catch(PDOException $e){
            echo "ERROR: ".$e->getMessage();
        }
