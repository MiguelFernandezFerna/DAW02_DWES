<?php
    function conectar(){
        $mysql_conexion = new mysqli("localhost","root","","pruebas");
    if ($mysql_conexion->connect_errno) {
        echo "Error de conexion a la base de datos: ". $mysql_conexion->connect_errno;
        exit;
    }
    return $mysql_conexion;
    }