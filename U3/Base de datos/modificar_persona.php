<?php
    include("conexion.php");
    $conexion = conectar();

    $id = 8;//$_POST["id_persona"];
    $nombre = "Javier";//$_POST["nombre"];
    $apellidos = "Centeno";//$_POST["apellidos"];

    $actualizar = $conexion->prepare("update persona set nombre = ?, apellidos=? where id_persona = ?");
    //Importante, ponerlo todo en el mismo orden
    $actualizar->bind_param("ssi",$nombre,$apellidos,$id);
    $actualizar->execute();

    if ($actualizar) {
        header("Location: listar_personas.php");
    }else{
        echo "No se ha ejecutado";
    }

    $conexion->close();
