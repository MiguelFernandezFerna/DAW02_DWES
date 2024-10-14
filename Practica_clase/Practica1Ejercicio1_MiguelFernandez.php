<?php

    $num_numeros = $_GET["num_numeros"];
    $num_min = $_GET["num_min"];
    $num_max = $_GET["num_max"];

    $numeros1 = [];
    $numeros2 = [];
    $num = 0;
    $mayor1 = 0;
    $mayor2 = 0;
    //Aqui metemos los datos aleatorios en el array con un bucle for, los datos son aleatorios, dentro de los valores introducidos por el usuario
    for ($i=0; $i < $num_numeros; $i++) { 
        $num = rand($num_min,$num_max);
        array_push($numeros1,$num);
        if ($num>=($num_max/2)) {
            $mayor1++;
        }
    }
    //imprimimos primer array
    echo "Este es el primer array: <br>";
    print_r($numeros1);
    echo "<br>";
//Recorremos el segundo array, siguiendo el proceso del primero
    for ($i=0; $i < $num_numeros; $i++) { 
        $num = rand($num_min,$num_max);
        array_push($numeros2,$num);
        if ($num>=($num_max/2)) {
            $mayor2++;
        } 
    }
    //imprimimos segundo array
    echo "Este es el segundo array: <br>";
    print_r($numeros2);
    echo "<br>";
    echo "Comprobación de cual s mayor: <br>";
//comprobamos que cantidad de mayores hay, y en función de cual sea mayor mostramos un array u otro
    if ($mayor1>$mayor2) {
        print_r($numeros1);
        echo "<br>";
        echo "El número de mayores es $mayor1 y pertenece al primer array";
    } else {
        print_r($numeros2);
        echo "<br>";
        echo "El número de mayores es $mayor2 y pertenece al segundo array";
    }
    



    
    
    