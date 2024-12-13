<?php
    $password = "juan65";

    echo "La cadena original es $password <br>";

    $cadena_cifrada = password_hash($password, PASSWORD_DEFAULT);

    echo "La cadena cifrada es: ".$cadena_cifrada."<br>";

    echo "Ahora desciframos la cadena: <br>";
    echo password_verify($password,$cadena_cifrada)." (muestra 1 si es valida, y nada si no lo es)";

