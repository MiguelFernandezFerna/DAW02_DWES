<?php
    // 240generaContrasenya.php: crea una función que a partir de un tamaño,
    // genere una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria.
    $tamaño = $_GET["tamaño"];

    function generaContrasenya($tamaños){
        $contraseña="";
        $letra = "";
        $numero = 0;
        $cont = 0;
        //lo que haremos es alternar un número con una letra, aunque se pueda hacer de muchas formas
        while (strlen($contraseña)<$tamaños) {
            //creo una variable contador para que en vez de ser todo minusculas alterne con las mayusculas
            if ($cont%2==0) {
                $letra = chr(rand(97, 122));
                $contraseña.=$letra;
            }else {
                $letra = chr(rand(65, 90));
                $contraseña.=$letra;
            }

            //esto lo hago por si el tamaño es impar, que sin el if, el tamaño se pasaría en 1
            if (strlen($contraseña)<$tamaños) {
                //esta es la parte numérica, que pone un número alternando con las letras
                $numero = rand(0,9);
                $contraseña.=$numero;
            }
            $cont++;
        }

        return $contraseña;
    }

    echo "La contraseña es: ".generaContrasenya($tamaño);


