<?php
$prueba1 = "hola";
$prueba2 = "hola33";
$prueba3 = "33";
$prueba4 = ",.()[]";
$prueba5 = " ,.()[]";

echo ctype_alpha($prueba1)."<br>"; // true
echo ctype_alnum($prueba2)."<br>"; // true
echo ctype_digit($prueba3)."<br>"; // true
echo ctype_punct($prueba4)."<br>"; // true
echo ctype_space($prueba5)."<br>"; // false porque solo se permiten espacios, tabuladores y saltos de linea, al haber un espacio seria correcto, pero al añadir una , se pone en false
echo ctype_space($prueba5[0])."<br>"; // true porque solo selecciona la primera posicion, que es un espacio
?>
