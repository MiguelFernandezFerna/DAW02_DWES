<?php
//poner siempre el metodo conectar q sale del conexion.php en una variable, ahorra dolores de cabeza
    include("conexion.php");
    $conexion = conectar();
    $id = $_GET["id_persona"];
    //preparamos el select
    // $consultaSelect = conectar()->prepare("select * from persona where id=?");
    $consultaSelect = $conexion->prepare("select * from persona p where id_persona =?");
    //vinculo variable al parametro e indicamos tipo
    $consultaSelect->bind_param("i",$id);
    
    //Ejecuto la consulta y si no hay error
    if ($consultaSelect->execute()) {
        //obtenemos solo una fila, que será la primera
        $resultado = $consultaSelect->get_result();
        $usuario = $resultado->fetch_assoc();

        if (!$usuario) {
            exit("No hay resultados para ese id");
        } else {
            print_r($usuario);
        }
        
    } else {
        echo "Error de visualización";
    }

    $resultado->close();
    $conexion->close();
    