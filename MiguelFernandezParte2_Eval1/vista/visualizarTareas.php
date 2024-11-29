<?php
    include("../config/conexion.php");

    function visualizarDatos(){
        $conectar = conexion();

        $consulta = "select * from tareas where realizada = :realizada order by prioridad ASC";
        
        $realizada="no";
        
        $sentencia = $conectar -> prepare($consulta);
        //vinculamos los parametros
        $sentencia->bindParam(":realizada",$realizada,PDO::PARAM_STR);
        $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
        $sentencia -> execute();
    
        $listaTareas = $sentencia -> fetchAll();
        foreach ($listaTareas as $proyecto) {
            echo "<tr>";
            echo "<td>$proyecto[id_tarea]</td>";
            echo "<td>$proyecto[titulo]</td>";
            echo "<td>$proyecto[descripcion]</td>";
            echo "<td>$proyecto[fecha]</td>";
            echo "<td>$proyecto[prioridad]</td>";
            $imagen = $proyecto["img_tarea"];
            echo "<td><img class='logotipo' src='data:image/png;base64," . base64_encode($imagen) . "' alt='imagen'width = 50px height = 50px/></td>";;
            echo "<td>$proyecto[realizada]</td>";
            echo "<td><button><a href='formulario_modificar.php?id_tarea=$proyecto[id_tarea]'>Modificar</a></button></td>";
            echo "<td><button><a href='../controlador/eliminar.php?id_tarea=$proyecto[id_tarea]'>Eliminar</a></button></td>";
            echo "</tr>";
        }
    $conectar=null;
}