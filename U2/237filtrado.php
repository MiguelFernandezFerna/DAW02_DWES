<?php
    // 237filtrado.html: crea un programa que permita al usuario leer un conjunto de números separados por 
    // espacios. El programa filtrará los números leídos para volver a mostrar únicamente los números pares e
    // indicará la cantidad existente.
    $tamaño = $_GET["tamaño"];
    $numeros =[]; 
    $lista = "";
    $listaPares = "";
    $numero = 0;
    $contPares=0;
    //en este for metemos los números en un array
    for ($i=0; $i < $tamaño; $i++) { 
        $numero= rand(1,20);
        array_push($numeros,$numero);
    }

    //creamos la lista con los números fuera del array
    for ($i=0; $i < count($numeros); $i++) {
        if ($numeros[$i]%2==0) {
            $listaPares=$listaPares." ".$numeros[$i];
            $contPares++;
        } 
        $lista= $lista." ".$numeros[$i];
    }

    echo "Dame números: $lista<br>";
    if ($contPares>0) {
        echo "Los $contPares números pares son: $listaPares";
    }

    //Importante, aquí podríamos haber usado explode, que sirve para convertir arrays en cadenas mediante un separador
    //sintaxis: explode("separador",valor)
    
