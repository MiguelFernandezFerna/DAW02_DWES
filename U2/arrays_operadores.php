<?php
    $arr1 = array(
        1 => "3000",
        2 => "4000",
    );
    $arr2 = array(
        1 => 3000,
        2 => 4000,
    );
    $arr3 = array(
        2 => "4000",
        1 => "3000",
    );
    if($arr1 == $arr2){
        echo "arr1 y arr2 son iguales <br>";
    }else{
        echo "arr1 y arr2 no son iguales <br>";
    }
    if($arr1 == $arr3){
        echo "arr1 y arr3 son iguales <br>";
    }else{
        echo "arr1 y arr3 no son iguales <br>";
    }
    if($arr1 === $arr2){
        echo "arr1 y arr2 son idénticos <br>";
    }else{
        echo "arr1 y arr2 no son idénticos <br>";
    }
    if($arr1 === $arr3){
        echo "arr1 y arr3 son idénticos <br>";
    }else{
        echo "arr1 y arr3 no son idénticos <br>";
    }
echo "<br>";
    $arr1 = array(
        10 => "3000",
        20 => "4000",
        30 => "6000",
    );
    print_r($arr1);
    echo "<br>";
    $arr2 = array(
        10 => "8000",
        15 => "6000",
        20 => "4000",
    );
    print_r($arr2);
    echo "<br>";
    $arr3 = $arr1 + $arr2;
    print_r($arr3);

    echo "<br><br>";

    $frutas = ["naranja", "pera", "manzana"];

    array_push($frutas, "piña");
    print_r($frutas);

   $ultFruta = array_pop($frutas);
   if (in_array("piña", $frutas)) {
    echo "<p>Queda piña</p>";
   } else {
    echo "<p>No queda piña</p>";
   }
   print_r($frutas);

   echo "<br><br>";

   $capitales = array("Italia" => "Roma",
     "Francia" => "Paris",
     "Portugal" => "Lisboa");

    $paises = array_keys($capitales);
    print_r($paises);
    echo "<br>";
    sort($paises);
    print_r($paises);

    unset($capitales["Francia"]);
    echo "<br>";
    print_r($capitales);