<?php
    $ruta = "matriz.txt";

    //nos aseguramos que el archivo existe
    if (file_exists($ruta)) {
        $archivo = fopen($ruta, "r");

        if ($archivo) {
            echo "Lectura fila por fila:";
            while (!feof($archivo)) {
                //leer cada fila con fscanf
                fscanf($archivo,"%d %d %d", $num1, $num2, $num3);
                echo "<br> $num1, $num2, $num3 ";
            }
            fclose($archivo);
        } else {
            echo "No se ha podido abrir el archivo";
        }
        
    } else {
        echo "Archivo no encontrado";
    }
    