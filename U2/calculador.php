<?php    
    function calculador($operacion, $numa, $numb){        
        $resul = $operacion($numa, $numb);
        return $resul;
    }
    function sumar($a, $b){
        return $a + $b;
    }
    function multiplicar($a, $b){
        return $a * $b;
    }
    function restar($a, $b){
        return $a - $b;
    }
    function dividir($a, $b){
        if ($a==0||$b==0) {
            return 0;
        } else {
            return $a / $b;
        }
        
        
    }
    function potencia($a, $b){
        return $a ** $b;
    }
    $a = 5;
    $b = 4;
    $r1 = calculador("multiplicar", $a, $b);
    echo "$r1 <br>";
    $r2 = calculador("sumar", $a, $b);
    echo "$r2 <br>";
    $r3= calculador("restar", $a, $b);
    echo "$r3 <br>";
    $r4 = calculador("dividir", $a, $b);
    echo "$r4 <br>";
    $r5 = calculador("potencia", $a, $b);
    echo "$r5 <br>";
