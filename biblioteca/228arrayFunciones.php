<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $funcion = 0;
    require "228biblioteca.php";
    $array = [
        "sumar",
        "restar",
        "multiplicar",
        "dividir",
    ];

    for ($i=0; $i < count($array); $i++) { 
        $funcion = $array[$i];

        echo $funcion($num1,$num2);
        echo "<br>";
    }
