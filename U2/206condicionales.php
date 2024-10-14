<?php
$num = 5;
//condicional simple
if ($num===5) {
    echo "El número es: $num";
}
echo "<br>";
//condicional compuesta
if ($num===5) {
    echo "El número es: $num";
} else {
    "El número no es el deseado";
}
echo "<br>";
//condicion anidada
if ($num==5) {
    echo "El número es: $num";
} else if ($num>5) {
   echo "El número es mayor al deseado";
}else {
    echo "El número es menos al deseado";
}
echo "<br>";
//switch
switch ($num) {
    case 5:
        echo "El número es: $num"; 
        break;
    case 6:
        echo "El número no es 5, es $num";
        break;
    case 7:
        echo "El número no es 5, es $num";
        break;
    default:
        echo "El número no es ninguno de los recomendados";
        break;
}
echo "<br>";
//operador ternario
$finalizado = ($num===5)?10:0;
    echo "La nota obtenida en tu examen es de: $finalizado";
