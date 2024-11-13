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
            echo "<td>$alumno[id_alumno]</td>";
            echo "<td>$alumno[dni]</td>";
            echo "<td>$alumno[nombre]</td>";
            echo "<td>$alumno[apellido1]
                <br>$alumno[apellido2]</td>";
            echo "<td>$alumno[email]</td>";
            echo "<td>$alumno[telefono]</td>";
            echo "<td>$alumno[curso]</td>";
            echo "</tr>";
        }
    } else {
        echo "No hay ningún dato";
    }

    $resultado->free();
    $conectar->close();
    }