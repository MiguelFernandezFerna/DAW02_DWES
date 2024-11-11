<?php
//poner siempre el metodo conectar q sale del conexion.php en una variable, ahorra dolores de cabeza
    include("conexion.php");
    $conexion = conectar();
    $nombre = $_GET["nombre"];
    //preparamos el select
    $consultaSelect = $conexion->prepare("select * from persona where nombre=?");
    //vinculo variable al parametro e indicamos tipo
    $consultaSelect->bind_param("s",$nombre);
    
    //Ejecuto la consulta y si no hay error
    if ($consultaSelect->execute()) {
        //obtenemos todas las filas y las metemos en el array asociativo usuario
        $resultado = $consultaSelect->get_result();
        $usuario = $resultado->fetch_all();

        if (!$usuario) {
            exit("No hay resultados para ese nombre");
        } else {
            foreach ($usuario as $persona) {
                print_r($persona);
                echo "<br>";
            }
        }
        
    } else {
        echo "Error de visualización";
    }

    $resultado->close();
    $conexion->close();
    