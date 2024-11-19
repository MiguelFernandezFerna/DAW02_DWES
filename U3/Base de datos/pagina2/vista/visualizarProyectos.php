<?php
    include("../config/conexion.php");

    function visualizarDatos(){
        $conectar = conexion();

        $consulta = "select * from proyecto";
        $sentencia = $conectar -> prepare($consulta);
        $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
        $sentencia -> execute();
    
        $listaProyecto = $sentencia -> fetchAll();
        foreach ($listaProyecto as $proyecto) {
            echo "<tr>";
            echo "<td>$proyecto[id_proyecto]</td>";
            echo "<td>$proyecto[titulo]</td>";
            echo "<td>$proyecto[descripcion]</td>";
            echo "<td>$proyecto[periodo]</td>";
            echo "<td>$proyecto[fecha_presentacion]</td>";
            echo "<td>$proyecto[nota]</td>";
            // echo "<td>$proyecto[logotipo]</td>";
            echo "<td>$proyecto[pdf_proyecto]</td>";
            echo "</tr>";
        }
    $conectar=null;
    }