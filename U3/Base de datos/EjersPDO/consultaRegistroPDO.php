<?php
    include("conexionPDO.php");
    $conexion = conexion();

    try {
        $sql = "select * from persona where id_persona = :id";

        $sentencia = $conexion->prepare($sql);
        $id_a_buscar=5;
        //vinculamos los parametros
        $sentencia->bindParam(":id",$id_a_buscar,PDO::PARAM_INT);
        //ejecutamos
        $sentencia->execute();
        //rowCount sirve para contar el número de filas de la BD que son afectadas
        $numFilas=$sentencia->rowCount();
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        if ($resultados) {
            foreach ($resultados as $resultado) {
                echo "Nombre: $resultado[nombre]<br>";
                echo "Apellidos: $resultado[apellidos]<br>";
                echo "Teléfono: $resultado[telefono]<br>";
            }
            echo "El número de filas es: $numFilas";
        }
    } catch (PDOException $e) {
        echo "Ha habido un error";
    }

    $conexion=null;