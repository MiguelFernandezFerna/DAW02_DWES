<?php
    // Letras totales y cantidad de palabras
    // Una línea por cada palabra indicando su tamaño
    $frase = "Hola Jose y soy espanol";
    $contLetra = 0;

    for ($i=0; $i < strlen($frase); $i++) { 
        if ($frase[$i]!=" ") {
            $contLetra++;
        }
    }
    echo "La cantidad de letras que hay en la frase es $contLetra<br>";
    echo "La cantidad de palabras que hay en la frase es ".str_word_count($frase)."<br><br>";

    //str_word_count()  cuenta el número de palabras en una cadena.

    $tokens = strtok($frase," ");
    while ($tokens!=false) {
        echo "$tokens, el tamaño: ".strlen($tokens)."<br>";
        $tokens = strtok(" ");
    }