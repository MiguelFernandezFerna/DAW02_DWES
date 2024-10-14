<?php
    $num = 1465;
    $posicion=3;
    $cantidadF = 2;
    $cantidadI= 3;

    function digitos($numero){
        return strlen($numero);
    }

    echo "Funcion digitos: ";
    echo digitos($num);
    echo "<br>";

    function digitosN($numero, $pos){
        $digito = 0;
        $aux = "$numero";
        for ($i=0; $i < strlen($numero); $i++) { 
            if ($i==$pos) {
                $digito=$aux[$i];
            }
        }
        return $digito;
    }
    echo "Funcion digitosN: ";
    echo digitosN($num,$posicion);
    echo "<br>";

    function quitaPorDetras($numero, $cant) {
        $numStr = (string)$numero;
        $nuevoNumStr=" ";

        $nuevoNumStr = substr($numStr, 0, strlen($numStr) - $cant);
        //substr lo que hace es recortar una cadena por el final, poniendo al principio la cadena original, luego la posición en la que quieres empezar, como si fuese un array, y luego hasta donde quieres que llegue la cadena
        return (int)$nuevoNumStr;
    }
    
    echo "Funcion quitaporDetras: ";
    echo quitaPorDetras($num, $cantidadF);
    echo "<br>";

    function quitaporDelante($numero, $cant){
        $numStr = (string)$numero;
        $nuevoNumStr = " ";
        $nuevoNumStr = substr($numStr,$cant,strlen($numStr));

        return (int)$nuevoNumStr;
    }

    echo "Funcion quitaporDelante: ";
    echo quitaporDelante($num, $cantidadI);


   
