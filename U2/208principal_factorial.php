<?php
$num=6;
$resultado = 1;
if ($num>0) {
   require "208calcula_factorial.php";
    echo "El factorial  de $num es: $resultado";
} else if($num === 0){
    echo "El factorial es 1";
} else {
    echo "No se puede hacer el factorial de un número negativo";
}

