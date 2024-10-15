<?php
//date — Dar formato a la fecha/hora local
    echo date("j.n.o", time());
//idate — Formatea una fecha/hora local como un entero
echo "<br>";
echo "<br>";
echo idate("d");
echo "<br>";
echo idate("m");
echo "<br>";
echo idate("Y");
//localtime — Obtiene fecha y hora local
echo "<br>";
echo "<br>";
print_r(localtime());
$localtime = localtime(time(),true);
echo "<br>";
print_r($localtime);
//getdate — Obtener información de la fecha/hora
echo "<br>";
echo "<br>";
print_r(getdate());