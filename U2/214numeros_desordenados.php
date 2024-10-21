<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Miguel Fernandez" content="MFF">
    <title>Ejercicio 214</title>
</head>
<body>
    <h1>Ejercicio 214</h1>
    <p>Escribe un programa que muestre los números pares del 0 al 50 (dentro de una lista desordenada). Modifica el programa para que le demos el valor máximo por URL.</p>
    <?php
    $pares=[];
    $capacidad = $_GET["capacidad"];
    $maximo=$_GET["max"];
    $cont = 0;
    while ($cont<$capacidad) {
        $num = rand(0,$maximo);
        if ($num%2==0) {
            array_push($pares,$num);
            $cont++;
        }
    }

    print_r($pares);
    ?>
</body>
</html>