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
            echo "<td>$proyecto[curso]</td>";
            echo "<td>$proyecto[periodo]</td>";
            echo "<td>$proyecto[descripcion]</td>";
            echo "<td>$proyecto[fecha_presentacion]</td>";
            echo "<td>$proyecto[nota]</td>";
            $logotipo = $proyecto["logotipo"];
            echo "<td><img class='logotipo' src='data:image/png;base64," . base64_encode($logotipo) . "' alt='imagen'width = 50px height = 50px/></td>";;
            echo "<td>$proyecto[pdf_proyecto]</td>";
            echo "<td><button><a href='formulario_modificar_proyecto.php?id_proyecto=$proyecto[id_proyecto]'>Modificar</a></button></td>";
            echo "<td><button><a href='../controlador/eliminar.php?id_proyecto=$proyecto[id_proyecto]'>Eliminar</a></button></td>";
            echo "</tr>";
        }
    $conectar=null;
}