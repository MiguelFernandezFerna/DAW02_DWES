<?php
$string = "Esto es un ejemplo de cadena a dividir";
/* Utiliza er y nueva línea como caracteres de tokenización, así  */
$tok = strtok($string, "e");
print_r($tok);
echo "<br>";
while ($tok !== false) {
    echo "Word=$tok<br />";
    $tok = strtok("ei");
}
?>

<?php
$batman = "Bruce Wayne es Batman";
$empresa = substr($batman, 6, 5); // Wayne
$bes = substr_count($batman, "B"); // 2
// Bruce Wayne es camarero
$camarero1 = substr_replace($batman, "camarero", 15);
$camarero2 = substr_replace($batman, "camarero", -6); // quita 6 desde el final
// Bruno es Batman
$bruno = substr_replace($batman, "Bruno", 0, 11);

echo "<br>";
echo $empresa;
echo "<br>";
echo $bes;
echo "<br>";
echo $camarero1;
echo "<br>";
echo $camarero2;
echo "<br>";
echo $bruno;
?>