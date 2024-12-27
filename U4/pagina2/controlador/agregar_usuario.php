<?php
    include("../config/conexion.php");
    $conexion = conexion();

    try{
        $nombreUsuario=$_POST["login"];
        $contrasena=$_POST["password"];
        $contrasenaNueva = password_hash($contrasena, PASSWORD_DEFAULT);
        $tipoUsuario=2;
        $correo = $_POST["correo"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellidos"];
        $baja = false;
        $activar = false;

        $sql = "insert into tutor (login, password, correo, nombre, apellidos, tipo_usu, baja, activar) values (:login, :password, :correo, :nombre, :apellidos, :tipo_usu, :baja, :activar)";
        $sentencia = $conexion->prepare($sql);

        $sentencia->bindParam(':login', $nombreUsuario, PDO::PARAM_STR);
        $sentencia->bindParam(':password', $contrasenaNueva, PDO::PARAM_STR);
        $sentencia->bindParam(':correo',$correo, PDO::PARAM_STR);
        $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $sentencia->bindParam(':apellidos',$apellido , PDO::PARAM_STR);
        $sentencia->bindParam(':tipo_usu', $tipoUsuario, PDO::PARAM_INT);
        $sentencia->bindParam(':baja', $baja, PDO::PARAM_BOOL);
        $sentencia->bindParam(':activar',$activar , PDO::PARAM_BOOL);

        //Ejecuto la consulta
        $resultado=$sentencia->execute();
        $conexion=null;
        header("Location:../vista/inicioSesion.php");

        if($resultado==true){
            echo "Datos insertados";
        }
        }
        catch(PDOException $e){
            echo "ERROR: ".$e->getMessage();
        }
