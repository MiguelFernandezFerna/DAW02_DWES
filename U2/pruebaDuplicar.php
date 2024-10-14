<?php
    function duplicarMal($a){
        $a = $a *2;
    }

    function duplicar($a){
        return $a *2;
    }
    function duplicar2(&$a){
        $a = $a *2;
    }


    $var1 = 5;
    duplicarMal($var1);
    echo "$var1 <br>";
    $var1 = duplicar($var1);
    echo "$var1 <br>";
    //La diferencia entre duplicar y duplicar2 es que al pasar por referencia el valor var1, se mantiene el resultado anterior, en este caso 10
    duplicar2($var1);
    echo "$var1 <br>";