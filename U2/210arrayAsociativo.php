<?php
/* Crear un array asociativo, donde guardes de 5 países (claves) 
sus capitales (valor). Recorre el array mostrando por cada país toda
la información ("La capital de España es Madrid"). En ese mismo 
recorrido crea dos arrays simples, uno que contenga las capitales 
y otro los países. Recórrelos, en este caso con un for*/
$arr1=[
    "España"=>"Madrid",
    "Francia"=>"París",
    "Luxemburgo"=>"Luxemburgo",
    "Bélgica"=>"Bruselas",
    "Albania"=>"Tirana",
];
foreach ($arr1 as $pais => $ciudad) {
    echo "El país cuya capital es $ciudad es $pais <br>";
    $arrP1[]=$pais;
    $arrC1[]=$ciudad;
}
echo "<br>";
for ($i=0; $i < count($arrP1); $i++) { 
    echo "La capital de $arrC1[$i] es $arrP1[$i]<br>";
}
echo "<br>";
print_r($arr1);
echo "<br>";
print_r($arrC1);
echo "<br>";
print_r($arrP1);