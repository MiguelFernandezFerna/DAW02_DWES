<?php
    //ucwords convierte las primeras letras de las palabras de un string en mayusculas
    $cadenaUcwords = "hola, como se encuentra";
    //podemos añadirle un separador si queremos, por defecto hay espacios
    $mostrarUcwords = ucwords($cadenaUcwords);
    echo "Función Ucwords: <br>";
    echo "Cadena original: $cadenaUcwords<br>";
    echo "Funcion ucwords: $mostrarUcwords<br><br>";

    //strrev devuelve la cadena inversa a la que hemos metido
    $cadenaStrrev="Hola soy Jose";
    $mostrarStrrev=strrev($cadenaStrrev);
    echo "Función Strrev: <br>";
    echo "Cadena original: $cadenaStrrev<br>";
    echo "Funcion strrev: $mostrarStrrev<br><br>";

    //str_repeat repite una cadena las veces que lo pidamos
    $cadenaStr_repeat="Hola soy Juan ";
    $mostrarStr_repeat = str_repeat($cadenaStr_repeat,3);
    echo "Función Str_repeat: <br>";
    echo "Cadena original: $cadenaStr_repeat<br>";
    echo "Funcion str_repeat: $mostrarStr_repeat<br><br>";

    //md5 se utiliza para generar un hash de 128 bits
    //sirve para comprobar contraseñas, etc, pero no se recomienda usarlo debido a fallas de seguridad
    $cadenaMd5= "youyouyiovani";
    $mostrarMd5 = md5($cadenaMd5);
    echo "Función md5: <br>";
    echo "Cadena original: $cadenaMd5<br>";
    echo "Funcion str_repeat: $mostrarMd5";





