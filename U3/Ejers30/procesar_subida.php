<?php

    //Comprueba que el fichero no pase de cierto tamaño
    $tam = $_FILES["fichero"]["size"];
    if($tam > 256 *1024){
        echo "<br>Demasiado grande";
        return;
    }
    echo "Nombre del fichero: " . $_FILES["fichero"]["name"];
    echo "<br>Nombre temporal del fichero en el servidor: " . $_FILES["fichero"]["tmp_name"];  

    //Muestra también la información del tamaño y el tipo
    $res = move_uploaded_file($_FILES["fichero"]["tmp_name"],"subidos/" . $_FILES["fichero"]["name"]);
    if($res){
        echo "<br>Fichero guardado";
    } else {
        echo "<br>Error";
    }