<?php
/*Crea un programa donde pruebes las funciones anteriores y 
consulta las funciones con array y describe y pruébalas 
(5-10 que veas interesantes)*/
$array1=[
    "padre",
    "madre",
    "hijo",
    "hija",
    "nieto",
    "nieta",
    "abuelo",
    "abuela",
];
$elemento2="suegro";
//print_r($array): muestra el contenido de todo el $array (en estado de programación), si queremos mostrar el contenido con un formato determinado, hemos de recorrer el array con foreach.
print_r($array1);
echo "<br><br>";
//var_dump($mixed): muestra el contenido del elemento recibido. Muestra más información que print_r.
var_dump($array1);
//$elemento = array_pop($array): elimina el último $elemento
$elemento=array_pop($array1);
echo "<br><br>";
print_r($array1);
//$elemento = array_shift($array): elimina el primer $elemento
$elemento = array_shift($array1);
echo "<br><br>";
print_r($array1);
//array_push($array, $elemento): añade un $elemento al final
array_push($array1, $elemento);
echo "<br><br>";
print_r($array1);
//$booleano = in_array($elem, $array): averigua si $elemento está en el $array
$booleano = in_array($elemento, $array1);
echo "<br><br>";
echo "$booleano :(Sale 1 si es verdadero, y nada si es falso, antes de los 2 puntos)";
echo "<br><br>";
print_r($array1);
//$claves = array_keys($array): devuelve las claves del $array asociativo
$claves = array_keys($array1);
echo "<br><br>";
print_r($claves);
//$tam = count($array): devuelve el tamaño de $array
$tam = count($array1);
echo "<br><br>";
echo "$tam";
//sort($array): ordena los elementos del $array
sort($array1);
echo "<br><br>";
print_r($array1);
//asort($array): ordena los elementos por elementos de la asociación manteniendo índice
asort($array1);
echo "<br><br>";
print_r($array1);
//isset($array[elemento]): indica si existe/tiene valor elemento dentro del array (No funciona)
isset($array1["padre"]);
//unset($array[elemento]): elimina el elemento del array(No funciona)
unset($array1["hija"]);
echo "<br><br>";
print_r($array1);
//$array2 = array_slice ($array1, clave, num_valores): extrae un array de tamaño num_valores desde la posición clave.
$array2 = array_slice ($array1, 2, 3);
echo "<br><br>";
print_r($array2);
//$resultado = array_merge($array1, $array2, $array3): crea un nueno array como unión con claves numéricas.
$resultado = array_merge($array1, $array2);
echo "<br><br>";
print_r($resultado);
//array_diff — Calcula la diferencia entre arrays
$resultado=array_diff($array1,$array2);
echo "<br><br>";
print_r($resultado);
//array_diff_key — Calcula la diferencia entre arrays empleando las claves para la comparación
$resultado=array_diff_key($array1,$array2);
echo "<br><br>";
print_r($resultado);
//array_reverse — Devuelve un array con los elementos en orden inverso
$resultado= array_reverse($array1);
echo "<br><br>";
print_r($resultado);
//array_unshift — Añadir al inicio de un array uno a más elementos
array_unshift($array1,"suegro","suegra");
echo "<br><br>";
print_r($array1);
//array_rand — Seleccionar una o más claves aleatorias de un array
$claves_aleatorias = array_rand($array1,3);
echo "<br><br>";
echo $array1[$claves_aleatorias[0]];
echo "<br><br>";
echo $array1[$claves_aleatorias[1]];
echo "<br><br>";
echo $array1[$claves_aleatorias[2]];



