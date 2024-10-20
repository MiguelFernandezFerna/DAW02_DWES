<?php
//235palindromo.php: escribe una función que devuelva un booleano indicando si una palabra es palíndroma 
//se lee igual de izquierda a derecha que de derecha a izquierda
$frase = "Anita, la gorda lagartona, no traga la droga latina";
    function palindromo($frases){
        $palindromo = false;
        $letra = "";
        $fraseEspacios="";
        $fraseFinal= "";
        //Aquí ponemos la cadena sin espacios
        for ($i=0; $i < strlen($frases); $i++) {
            $letra = $frases[$i];
            $letra = htmlentities($letra);
            //Ponemos todas en minusculas para que no afecte al palindromo
            $letra = strtolower($letra); 
            if ($letra!=" "&&$letra!=","&&$letra!=".") {
                $fraseEspacios.=$letra;
            }
        }
        //Damos la vuelta a la cadena
        for ($i=strlen($fraseEspacios)-1; $i >=0 ; $i--) { 
            $fraseFinal.=$fraseEspacios[$i];
        }
        //Comparamos una con la otra
        if ($fraseFinal==$fraseEspacios) {
            $palindromo=true;
        }
        return $palindromo;
    }
    
    if (palindromo($frase)==true) {
        echo "La frase: $frase. Es palíndromo";
    }else {
        echo "La frase: $frase. No es palíndromo";
    }