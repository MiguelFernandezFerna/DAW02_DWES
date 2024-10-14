<?php
//$num es la variable que recoge el valor de la url
//http://localhost/misPHP/desdeURL.php?num=5&num2=3
//http://localhost/...ruta.../nombre_script.php?variable=valor
    $numero1=$_GET["num"];
    echo "$numero1";
    echo "<br>";
    $numero2=$_GET["num2"];
    echo "$numero2";
?>