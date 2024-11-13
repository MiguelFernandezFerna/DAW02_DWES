<?php
    function conexion(){
        $mysql_conexion = new mysqli("localhost","root","","gestion_alumnos");
    if ($mysql_conexion->connect_errno) {
        echo "Error de conexion a la base de datos: ". $mysql_conexion->connect_errno;
        exit;
    }
    return $mysql_conexion;
    }
    