<?php
$num=$_GET["num"];
$resultado = 1;
if ($num>0) {
    for ($i = 1; $i <= $num; $i++) { 
        $resultado=$resultado*$i;
    }
    echo "El factorial  de $num es: $resultado";
} else if($num === 0){
    echo "El factorial es 1";
} else {
    echo "No se puede hacer el factorial de un número negativo";
}
//http://localhost/misPHP/208factorialURL.php?num=5
//sale el resultado = 120
