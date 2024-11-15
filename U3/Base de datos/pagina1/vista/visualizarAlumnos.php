<?php
    include("../config/conexion.php");

    function visualizarDatos(){
        $conectar = conexion();

        $consulta = "select * from alumnos";
        $resultado = $conectar->query($consulta);
        $numRegistros = $resultado->num_rows;
    
        $listaAlumnos = $resultado->fetch_all(MYSQLI_ASSOC);

    if ($numRegistros>0) {
        foreach ($listaAlumnos as $alumno) {
            echo "<tr>";
            echo "<td>$alumno[dni]</td>";
            echo "<td>$alumno[nombre]</td>";
            echo "<td>$alumno[apellido1]
                <br>$alumno[apellido2]</td>";
            echo "<td>$alumno[email]</td>";
            echo "<td>$alumno[telefono]</td>";
            echo "<td>$alumno[curso]</td>";
            echo "<td><button id=Modificar><a href=formulario_modificar_alumnos.php?id_alumno=$alumno[id_alumno]>Modificar</a></button></td>";
            echo "<td><button id=eliminar><a href=../controlador/eliminar_alumno.php?id_alumno=$alumno[id_alumno]>Eliminar</a></button></td>";
            echo "</tr>";
        }
    } else {
        echo "No hay ningún dato";
    }

    $resultado->free();
    $conectar->close();
    }