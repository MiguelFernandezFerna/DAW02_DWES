<?php
include("conexion.php");

$conexion = conectar();
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];

$consultaInsert=$conexion->prepare("insert into persona(nombre, apellidos, telefono) value(?,?,?)");

$consultaInsert->bind_param("sss", $nombre, $apellidos, $telefono);

if ($consultaInsert->execute()) {
    header("Location: listar_personas.php");
} else {
    echo "Error al insertar";
}
echo $conexion->error;
$conexion->close();