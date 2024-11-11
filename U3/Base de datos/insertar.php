<?php
include("conexion.php");

$conexion = conectar();
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];

$consultaInsert=$conexion->prepare("insert into persona(nombre, apellidos, telefono) value(?,?,?)");

$consultaInsert->bind_param("sss", $nombre, $apellidos, $telefono);

if ($consultaInsert->execute()) {
    echo "Datos insertados: <br>";
    echo $nombre."<br>";
    echo $apellidos."<br>";
    echo $telefono."<br>";
} else {
    echo "Error, no se ha podido insertar";
}
echo $conexion->error;
$conexion->close();