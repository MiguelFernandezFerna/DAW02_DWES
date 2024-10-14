<?php
$num = 33;
$nombre = "Larry Bird";
printf("%s llevaba el número %d", $nombre, $num);// %d -> número decimal, %s -> string
echo "<br>";
$frase = sprintf("%s llevaba el número %d", $nombre, $num);
echo $frase;
echo "<br>";
?>

<?php
    $num1 = 123.456;
    $num2 = 1616.087;

    printf("El número 1 es %2\$.2f y el número 2 es %1\$u",$num2,$num1);
    echo "<br>";
    printf("El número 1 es %.2f y el número 2 es %u",$num1,$num2);//Se puede poner así si no está ordenado
    echo "<br>";
?>

<?php
    $cadena = "El caballero oscuro";
    $tam = strlen($cadena);
    echo "La longitud de '$cadena' es: $tam <br />";
    
    $oscuro = substr($cadena, 13); // desde 13 al final, oscuro
    $caba = substr($cadena, 3, 4); // desde 3, 4 letras, caba
    $katman = str_replace("c", "k", $cadena);
    echo "$oscuro $caba ahora es: $katman <br />";
    
    echo "Mayúscula: ".strtoupper($cadena);
?>

<?php
function despues(string $letra): string {
    $asciiLetra = ord($letra); //ASCII de la letra
    return chr($asciiLetra + 1); //Letra del código ASCII
}

$letra="B";
echo "Después de $letra, viene: ".despues($letra);
echo "<br>";
?>

<?php
$cadena = " Programando en PHP ";
$limpia = trim($cadena); // "Programando en PHP"

$sucia = str_pad($limpia, 23, "."); // "Programando en PHP....."
echo "<br>";
?>

<?php
$frase1 = "Alfa";
$frase2 = "Alfa";
$frase3 = "Beta";
$frase4 = "Alfa5";
$frase5 = "Alfa10";

var_dump( $frase1 == $frase2 ); // true
echo "<br>";
var_dump( $frase1 === $frase2 ); // true
echo "<br>";
var_dump( strcmp($frase1, $frase2) ); // 0
echo "<br>";
var_dump( strncmp($frase1, $frase5, 3) ); // 0
echo "<br>";
var_dump( $frase2 < $frase3 ); // true
echo "<br>";
var_dump( strcmp($frase2, $frase3) ); // -1
echo "<br>";
var_dump( $frase4 < $frase5 ); // false
echo "<br>";
var_dump( strcmp($frase4, $frase5) ); // 1 → f4 > f5
echo "<br>";
var_dump( strnatcmp($frase4, $frase5) ); // -1 → f4 < f5
echo "<br>";
?>

<?php
$frase = "Quien busca encuentra, eso dicen, a veces";
echo "<br>";
$pos1 = strpos($frase, ","); // encuentra la primera coma
echo "<br>";
$pos2 = strrpos($frase, ","); // encuentra la última coma
echo "<br>";
$trasComa = strstr($frase, ","); // ", eso dicen, a veces"
echo "<br>";
?>