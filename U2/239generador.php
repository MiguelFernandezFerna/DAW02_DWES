<?php
    // 239generador.php: crea una función que permite generar una letra aleatoria,
    // mayúscula o minúscula, dependiendo de lo que yo quiera.

    //aquí decidimos si la letra será mayúscula o minúscula
    $opcion = $_GET['letra'];
    function letraAleatoria ($opciones) {
        //Si imprimimos mayuscula    
        if ($opciones=='mayuscula')  {
            //Devolvemos una letra ramdom de dentro de los valores ascii correspondientes a las letras mayusculas
            //usamos rand, que solo sirve para numeros enteros, y lo transformamos en caracteres ascii
            return chr(rand(65, 90));

            //si imprimimos minuscula
        } else if ($opciones=="minuscula") {
            //Devolvemos una letra ramdom de dentro de los valores ascii correspondientes a las letras minusculas
            //usamos rand, que solo sirve para numeros enteros, y lo transformamos en caracteres ascii
            return chr(rand(97, 122));
        }
    }
    echo "Has escogido que tu letra sea $opcion.<br>";
    echo "La letra es: ".letraAleatoria($opcion);
        



