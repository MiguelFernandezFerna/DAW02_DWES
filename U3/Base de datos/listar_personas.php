<?php
    // $mysql_conexion = new mysqli("localhost","root","","pruebas");
    // if ($mysql_conexion->connect_errno) {
    //     echo "Error de conexion a la base de datos: ". $mysql_conexion->connect_errno;
    //     exit;
    // }

    include("conexion.php");

    $consulta = "select * from persona";
    $resultado = conectar()->query($consulta);
    $numRegistros = $resultado->num_rows;
    
    $listaPersonas = $resultado->fetch_all(MYSQLI_ASSOC);
    echo "Numero de registro: ". $numRegistros. "<br>";

    if ($numRegistros>0) {
        echo "<table border = solid cellspacing=0>";
        echo "<th>ID</th>";
        echo "<th>Nombres</th>";
        echo "<th>Apellidos</th>";
        echo "<th>Telefono</th>";
        foreach ($listaPersonas as $persona) {
            echo "<tr>";
            echo "<td>$persona[id]</td>";
            echo "<td>$persona[nombre]</td>";
            echo "<td>$persona[apellidos]</td>";
            echo "<td>$persona[telefono]</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay ningún dato";
    }

    $resultado->free();
    conectar()->close();
    