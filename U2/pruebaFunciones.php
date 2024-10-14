<?php
     function sumaParametros() {
         if (func_num_args() == 0) {
             return false;
         } else {
            $arrayArg = func_get_args();
             $suma = 0;
             foreach ($arrayArg as $valor ) {
                $suma += $valor;
             }
             return $suma;
         }
     }
echo sumaParametros(1,5,9); // 15
echo "<br>----------------------<br>";
?>
<?php
     function sumaParametrosMejor(...$numeros) {
         if (count($numeros) == 0) {
             return false;
         } else {
             $suma = 0;
             foreach ($numeros as $num) {
                 $suma += $num;
             }
             return $suma;
         }
     }
     echo sumaParametrosMejor(1, 5, 9); // 15
     echo "<br>----------------------<br>";
?>
<?php
//Lo comentamos para que no de error y poder ejecutar el programa, pero el objetivo es quede error en la linea 45
//declare(strict_types=1);

function suma(int $a, int $b) : int {
    return $a + $b;
}
$num = 33;
echo suma(10, 30);
echo "<br>";
echo suma(10, $num);
echo "<br>";
echo suma("10", 30); // error por tipificación estricta, sino daría 40
echo "<br>----------------------<br>";
?>
<?php
// //Alcance local
// function miCiudad() {
//     $ciudad = "Palencia";
//     echo "Dentro de la función: $ciudad.<br>";
// }

// $ciudad = "Granada";
// echo "Antes de la función: $ciudad.<br>";
// miCiudad();
// echo "Después de la función: $ciudad.";
// echo "<br>----------------------<br>";
?>
<?php
function miCiudad() {
    global $ciudad;
    $ciudad = "Palencia";
    echo "Dentro de la función: $ciudad.<br>";
}

$ciudad = "Granada";
echo "Antes de llamar: $ciudad.<br>";
miCiudad();
echo "Después de llamar: $ciudad.";
echo "<br>----------------------<br>";
?>