<?php
    //EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI.
    $cadena = "Soy Jose Luis Torrente";
    function cani($cad){
        $cadenaFinal = "";
        $letra = "";
        $tokens = strtok($cad," ");
    while ($tokens!=false) {
            $letra=$tokens;
            for ($i=0; $i < strlen($letra); $i++) { 
                if ($i%2==0) {
                    $letra = strtoupper($letra);
                }
                $cadenaFinal = $cadenaFinal.$letra." ";
            } 
            }
            $tokens = strtok(" ");
        
        return $cadenaFinal;
        }

    echo cani($cadena);