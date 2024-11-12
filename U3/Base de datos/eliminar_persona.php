<?php
    include("conexion.php");
    $conexion = conectar();

    if (!isset($_GET["id_persona"])) {
        exit("No hay id o este ya ha sido eliminado");
    }
        $id = $_GET["id_persona"];
        $eliminar = $conexion->prepare("delete from persona where id_persona = ?");
        $eliminar ->bind_param("i",$id);
        $eliminar->execute();

        header("Location: listar_personas.php");

        $conexion->close();