<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Miguel Fernandez" content="MFF">
    <title>Ejercicio 219</title>
</head>
<body>
    <h1>Ejercicio 219</h1>
    <p>Rellena un array de 100 elementos de manera aleatoria con valores M o F (por ejemplo ["M", "M", "F", "M", ...]). Una vez completado, vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los valores almacenando el resultado en un array asociativo ['M' => 44, 'F' => 66] (no utilices variables para contar las M o las F). Finalmente, muestra el resultado por pantalla.</p>
    <?php
    $arrayReferencia=[];
    $m=5;
    $f=6;
        $array=[];
        for ($i=0; $i < 100; $i++) { 
            $num= rand(5,6);
            if ($num==5) {
                $letra="M";
                array_push($array,$letra);
            } else{
                $letra="F";
                array_push($array,$letra);
            }
        }
        print_r($array);
        foreach ($array as $final) {
            if ($final=="F") {
                array_push($arrayReferencia,$final);
            } 
        }
        $arrayFinal=[
            "F"=>count($arrayReferencia),
            "M"=>100-count($arrayReferencia),
        ];
        echo "<br><br>";
        print_r($arrayFinal);
    ?>
</body>
</html>