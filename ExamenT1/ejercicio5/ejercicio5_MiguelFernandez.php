<?php
    
    $insertarPalabra = $_GET["palabra"];

    function compruebaAnagrama($palabras){
        $palabra="";
        $cont = 0;
        $ocurrir=0;
        for ($i=0; $i < 4; $i++) { 
            $palabra .=chr(rand(65,90));
        }
        for ($i=0; $i < strlen($palabra); $i++) { 
            for ($j=0; $j < strlen($palabras); $j++) { 
                if ($ocurrir==0) {
                    if ($palabras[$i]==$palabra[$j]) {
                        $cont++;
                        $ocurrir++;
                    }
                }
                }
        }

        if ($cont==4) {
            return "La palabra $palabra es anagrama de $palabras";
        } else {
            return "La palabra $palabra no es anagrama de $palabras";
        }
        
    }
    


    echo compruebaAnagrama($insertarPalabra);
    
    

