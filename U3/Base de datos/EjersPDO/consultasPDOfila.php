<?php
    include ("conexionPDO.php");
    $conexion = conexion();
try{
    $sql = "select * from persona";

    $sentencia = $conexion -> prepare($sql);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();

    while ($fila = $sentencia -> fetch()){
        echo "ID: ".$fila["id_persona"] . "<br/>";
        echo "Título: ".$fila["nombre"] . "<br/>";
    }
}
catch (PDOException $e){
    echo $e -> getMessage();
}