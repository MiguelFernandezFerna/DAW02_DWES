<?php
    include("conexion.php");
    $conexion = conectar();

    if (!isset($_GET["id"])) {
        exit("No hay id o este ya ha sido eliminado");
    }
        $id = $_GET["id"];
        $eliminar = $conexion->prepare("delete from persona where id = ?");
        $eliminar ->bind_param("i",$id);
        $eliminar->execute();

        header("Location: listar_personas.php");

        $conexion->close();