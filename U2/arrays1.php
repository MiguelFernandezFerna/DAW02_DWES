<?php
    $arr1 = [
        0 => 444,
        1 => 222,
        2 => 333,
    ];
    print_r($arr1);
    echo "<br>" . "pos 0: " . $arr1[0] . "<br>";
    $arr1[0] = 555;
    print_r($arr1);
    echo "<br>";
    $arr2 = array (
        "1111A" => "Juan Vera Ochoa",
        "1112A" => "Maria Mesa Cabeza",
        "1113A" => "Ana Puertas Peral"
    );
    print_r($arr2);
    echo "<br>";     
    $arr2["1113A"] = "Ana Puertas Segundo";
    print_r($arr2);
    echo "<br>";  
    echo "La posición 2 del array es $arr1[2]";
    echo "<br>";
    echo "La posición \"1113A\" del array es {$arr2["1113A"]}";
    echo "<br>";
    foreach ($arr2 as $nombre) {
        echo "$nombre <br>";        
    }
    foreach ($arr2 as $codigo => $nombre) {
        echo "Código: $codigo Nombre: $nombre <br>";        
    }
    echo "<br>";
    $arr1 = array(
        "Viernes" => 22,
        "Sábado" => 34
    );
    /* no modifica el array */
    foreach ($arr1 as $cantidad) {
        $cantidad = $cantidad * 2;        
    }
    print_r($arr1);
    echo "<br>";
    /* modifica el array */
    foreach ($arr1 as &$cantidad) {
        $cantidad = $cantidad * 2;            
    }    
    print_r($arr1);