<?php
include("../../config/conexion.php");
$conexion = conexion();

$id_tutor = $_GET["id_tutor"];
$baja = 1;

//sentencia sql para actualizar
try {
    $sql = "update tutor set baja = :baja where id_tutor = :id_tutor";
    $sentencia = $conexion->prepare($sql);
    //vinculamos los parámetros
    $sentencia->bindParam(':id_tutor',$id_tutor, PDO::PARAM_INT);
    $sentencia->bindParam(':baja', $baja, PDO::PARAM_BOOL);
    //ejecutamos
    $resultado = $sentencia->execute();
    if ($resultado) {
        header("Location: ../../vista/admin/paginaAdmin.php");
    }
} catch (PDOException $e) {
    echo $e ->getMessage();
}
$conexion=null;
