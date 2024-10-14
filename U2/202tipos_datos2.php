<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>202tipos_datos2.php</title>
</head>
<body>
<?php
    /* declaración de variables */
    $entero = 4; // tipo integer
    $numero = 4.5;   // tipo coma flotante
    $cadena = "cadena"; // tipo cadena de caracteres
    $bool = true; //tipo booleano
    /* cambio de tipo de una variable */
    //Las " " detectan la variable y la interpretan, en las ' ' no detectan las variables y no las interpreta
    echo "La variable contiene el dato $entero y es de tipo ".gettype($entero);
    echo "<br>";
    echo "La variable contiene el dato $numero y es de tipo ".gettype($numero);
    echo "<br>";
    echo "La variable contiene el dato $cadena y es de tipo ".gettype($cadena);
    echo "<br>";
    echo "La variable contiene el dato $bool y es de tipo ".gettype($bool);
    echo "<br>";
    ?>
</body>
</html>