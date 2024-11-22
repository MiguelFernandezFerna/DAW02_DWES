<?php
    include("conexion.php");
    $conectar = conexion();
    
    $archivo = "escribirYleer.txt";
    //si queremos añadir texto, debe abrirse a+
    //$fp = fopen($archivo, "a+");
    
    $consulta = "select * from alumnos";
        $resultado = $conectar->query($consulta);
    
        $listaAlumnos = $resultado->fetch();

        foreach ($listaAlumnos as $alumno) {
            $texto = $alumno;
            $fp = fopen($archivo,"w");
            fwrite($fp, $texto);
        }


    fclose($fp);