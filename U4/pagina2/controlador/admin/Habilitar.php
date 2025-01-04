<?php
include("../../config/conexion.php");
$conexion = conexion();

$id_tutor = $_GET["id_tutor"];
$activar = 1;

//sentencia sql para actualizar
try {
    $sql = "update tutor set activar = :activar where id_tutor = :id_tutor";
    $sentencia = $conexion->prepare($sql);
    //vinculamos los parámetros
    $sentencia->bindParam(':id_tutor',$id_tutor, PDO::PARAM_INT);
    $sentencia->bindParam(':activar', $activar, PDO::PARAM_BOOL);
    //ejecutamos
    $resultado = $sentencia->execute();
    if ($resultado) {
        header("Location: ../../vista/admin/paginaAdmin.php");
    }
} catch (PDOException $e) {
    echo $e ->getMessage();
}
$conexion=null;