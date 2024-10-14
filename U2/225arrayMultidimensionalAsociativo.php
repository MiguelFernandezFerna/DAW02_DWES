<?php
    $nominas = array(
        array("Nombre" => "Juan", "Sueldo" => 2500),
        array("Nombre" => "María", "Sueldo" => 3000),
        array("Nombre" => "María", "Sueldo" => 3050),
    );
    $nombres=[];
    $sueldos=[];
    foreach ($nominas as $empleado) {
        foreach ($empleado as $nombre => $sueldo) {
            echo "$nombre: $sueldo ";
            array_push($nombres,$nombre);
            array_push($sueldos,$sueldo);
        }
        echo "<br>";
    }
