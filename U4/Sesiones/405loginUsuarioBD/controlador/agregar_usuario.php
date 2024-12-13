<?php
    include("../config/conexion.php");
    $conexion = conexion();

    try{
        $nombreUsuario=$_POST["nombreUsuario"];
        $contrasena=$_POST["contraseña"];
        $contrasenaNueva = password_hash($contrasena, PASSWORD_DEFAULT);
        $tipoUsuario=$_POST["tipoUsuario"];

        $sql = "insert into users (usuario, password, tipo_usu) values (:nombreUsuario, :contrasena, :tipoUsuario)";
        $sentencia = $conexion->prepare($sql);

        $sentencia->bindParam(':nombreUsuario', $nombreUsuario, PDO::PARAM_STR);
        $sentencia->bindParam(':contrasena', $contrasenaNueva, PDO::PARAM_STR);
        $sentencia->bindParam(':tipoUsuario', $tipoUsuario, PDO::PARAM_INT);

        //Ejecuto la consulta
        $resultado=$sentencia->execute();
                header("Location:../vista/index.php");

        if($resultado==true){
            echo "Datos insertados";
        }
        }
        catch(PDOException $e){
            echo "ERROR: ".$e->getMessage();
        }
