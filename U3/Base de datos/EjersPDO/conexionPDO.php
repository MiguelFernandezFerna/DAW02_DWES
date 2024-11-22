<?php
    function conexion(){
        $servidor = 'mysql:dbname=pruebas;host=localhost';
    $usuario = 'root';
    $contraseña = '';
    try {
        $conexion = new PDO($servidor,$usuario,$contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Fallo la conexion: ". $e->getMessage();
    }
    return $conexion;
    }