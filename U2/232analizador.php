<?php
    // Letras totales y cantidad de palabras
    // Una línea por cada palabra indicando su tamaño
    $frase = "Hola Jose y soy espanol";
    $contLetra = 0;
    $contPalabra=1;

    for ($i=0; $i < strlen($frase); $i++) { 
        if ($frase[$i]!=" ") {
            $contLetra++;
        }
        if ($frase[$i]==" ") {
            $contPalabra++;
        }
    }
    echo "La cantidad de letras que hay en la frase es $contLetra<br>";
    echo "La cantidad de palabras que hay en la frase es $contPalabra<br><br>";

    //Para llamar al strtok por primera vez ponemos el string para iniciarlo, y el separador o token, que separará el string en strings mas pequeños 
    $tokens = strtok($frase, " ");
    while ($tokens!=false) {
        echo "$tokens, el tamaño: ".strlen($tokens)."<br>";
        //La siguiente llamada ya no necesita el string, porque ya está iniciado, solo necesita el separador para pasar al siguiente token
        $tokens = strtok(" ");
    }

