<?php
    $enteros=$_GET["enteros"];
    function operandoValores($entero){
        $suma=0;
        $producto = 1;
        for ($i=0; $i < $entero; $i++) { 
            $num = rand(1,30);
            $suma+=$num;
            $producto=$producto*$num;
        }

        $array = [
            "suma"=>$suma,
            "producto"=>$producto,
        ];
    return $array;
    }

    print_r(operandoValores($enteros));
?>