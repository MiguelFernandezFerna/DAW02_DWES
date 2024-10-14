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
    $maximo=$_GET["max"];
    while(count($pares)<intval($maximo/2)+1){
        $num=rand(0,50);
    if($num%2==0){
        if(in_array($num, $pares)==false)
        array_push($pares, $num);
    }
    }
        print_r($pares);
    ?>
</body>
</html>