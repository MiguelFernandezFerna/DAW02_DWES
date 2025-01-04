<?php
include("../config/conexion.php");
$conexion = conexion();

$id_proyecto = $_GET["id_proyecto"];
$completar = 0;

//sentencia sql para actualizar
try {
    $sql = "update proyecto set completado = :completado where id_proyecto = :id_proyecto";
    $sentencia = $conexion->prepare($sql);
    //vinculamos los parámetros
    $sentencia->bindParam(':id_proyecto',$id_proyecto, PDO::PARAM_INT);
    $sentencia->bindParam(':completado', $completar, PDO::PARAM_BOOL);
    //ejecutamos
    $resultado = $sentencia->execute();
    if ($resultado) {
        header("Location: ../vista/admin/paginaAdmin.php");
    }
} catch (PDOException $e) {
    echo $e ->getMessage();
}
$conexion=null;