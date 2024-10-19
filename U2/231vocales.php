<?php
//231vocales.php: a partir de una frase, devuelve la cantidad de cada una de las vocales, y el total de ellas.
    $frase = "eres un lamebicho y un mamañena";
    $contadorTotal = 0;
    $a = substr_count($frase,"a");
    $e = substr_count($frase,"e");
    $i = substr_count($frase,"i");
    $o = substr_count($frase,"o");
    $u = substr_count($frase,"u");
    $contadorTotal=$contadorTotal+$a+$e+$i+$o+$u;
    echo "a: $a <br>";
    echo "e: $e <br>";
    echo "i: $i <br>";
    echo "o: $o <br>";
    echo "u: $u <br>";
    echo "Total: $contadorTotal <br>";