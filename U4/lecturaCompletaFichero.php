<?php
    $contenido=file_get_contents("hola.txt");
    echo "Contenido del fichero: $contenido<br>";
    //Se crea un fichero
    $res=file_put_contents("adios.txt", "Fichero creado con file put_contents");
    if($res){
    echo "Fichero creado con éxito <br>";
    }else{
    echo "Error al crear el fichero <br>";
    }
    echo "Directorio actual: ". __DIR__."<br>";
    echo "Linea de codigo en la que se está escribiendo esto: ". __LINE__."<br>";
    echo "Ruta archivo actual: ". __FILE__."<br>";
