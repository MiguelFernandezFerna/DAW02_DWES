<?php
include("conexion.php");

$conexion = conectar();
$nombre = "Miguel";//$_POST["nombre"];
$apellidos = "Fernandez";//$_POST["apellidos"];
$telefono = 666999888;//$_POST["telefono"];

$consultaInsert=$conexion->prepare("insert into persona(nombre, apellidos, telefono) value(?,?,?)");

$consultaInsert->bind_param("ssi", $nombre, $apellidos, $telefono);

if ($consultaInsert->execute()) {
    echo "Datos insertados: <br>";
    echo $nombre."<br>";
    echo $apellidos."<br>";
    echo $telefono."<br>";
} else {
    echo "Error, no se ha podido insertar";
}

$conexion->close();