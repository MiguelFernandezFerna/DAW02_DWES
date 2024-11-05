<?php
    //conexion1.php
    // "Servidor","usuario","contraseña","base de datos"
    $conexion = mysqli_connect("localhost","root","","pruebas");
    //comprobamos la conexion
    if (mysqli_connect_errno()) {
        echo "Fallo al conectar a MySQL: ". mysqli_connect_error();
        exit();
    }
    echo "<h1>Bienvenid@ a MySQL!!</h1>";