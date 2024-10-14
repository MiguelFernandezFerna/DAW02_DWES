<?php
    //230fraseImpares.php: lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares.
    $frase = "soy jose mamañema";
    $letra = "";
    $fraseFinal = " ";
    for ($i=0; $i < strlen($frase); $i++) { 
        if ($i%2!=0) {
            $letra = $frase[$i];
            $letra = htmlentities($letra);
            $fraseFinal = $fraseFinal."".$letra;
        }
    }
    echo "La frase original es: <br>";
    echo $frase;
    echo "<br>";
    echo "La frase solo con los caracteres impares es: <br>";
    echo $fraseFinal;
?>