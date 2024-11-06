<?php
    //conexion1.php
    // "Servidor","usuario","contraseña","base de datos"
    $conexion = mysqli_connect("localhost","root","","pruebas");
    //comprobamos la conexion
    if (mysqli_connect_errno()) {
        echo "Fallo al conectar a MySQL: ". mysqli_connect_error();
        exit();
    }
    //consulta
    $consulta = "select * from `persona`";
    //guardar registros
    $listaPersonas = mysqli_query($conexion,$consulta);

    //comprobamos si el servidor nos ha devuelto resultados
    if ($listaPersonas) {
        //recorremos cada resultado que se nos devuelve
        foreach ($listaPersonas as $persona) {
            echo "
            $persona[id]
            $persona[nombre]
            $persona[apellidos]
            $persona[telefono]
            <br>
            ";
        }
    }