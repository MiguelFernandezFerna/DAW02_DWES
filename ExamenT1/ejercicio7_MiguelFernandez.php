<?php
    $array=[
        "armario"=>400,
        "mesa"=>200,
        "silla"=>30,
        "cama"=>250,
    ];
    $muebles=[];
    $pesos=[];
    //Recorremos el array asociativo y metemos cada cosa separada en 2 arrays diferentes
    foreach ($array as $mueble => $peso) {
        echo "El $mueble pesa $peso <br>";
        array_push($muebles,$mueble);
        array_push($pesos,$peso);
    }
    //ordenamos el array asociativo con asort para tener en cuenta la clave
    asort($array);
    echo "<br>";
    //recorremos el array ordenado
    foreach ($array as $mueble => $peso) {
        echo "El $mueble pesa $peso <br>";
    }
    echo "<br>";

    $array2=[];

    //ponemos a la inversa el array
    array_reverse($array);
    foreach ($array as $mueble => $peso) {
        $array2+=[
            $mueble=>$peso,
        ];
    }
    //Recorremos el segundo array
    echo "Es el segundo array: <br>";
    foreach ($array2 as $mueble => $peso) {
        echo "El $mueble pesa $peso <br>";
    }




