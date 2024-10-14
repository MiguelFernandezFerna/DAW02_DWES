<?php
    function esPar($num){
        if ($num%2==0) {
            return true;
        } else {
            return false;
        }
    }

    function arrayAleatorio($tam, $min,$max){
        $array=[$tam];
        for ($i=0; $i < $tam; $i++) { 
            $num = rand($min,$max);
            array_push($array,$num);
        }
        return $array;
    }

    
    
    function arrayPares(&$array=[]){
        $contPar = 0;
        for ($i=0; $i < count($array); $i++) { 
            if (esPar($array[$i])) {
                $contPar++;
                $array[$i]=0;
            }
        }
        return $contPar;
    }

    $array = [];

    $array = arrayAleatorio(5,1,10);
    echo "Array sin cambios: <br>";
    print_r($array);
    echo "<br>";

    $cont = arrayPares($array);
    echo "La cantidad de números pares es: $cont <br>";
    echo "Array con cambios: <br>";
    print_r($array);
?>