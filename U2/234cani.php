<?php
    $input = "Si el muxaxo te basila tu t kaya i lo asimila";
    
    
    function convierteCani ($frase) {
        $fraseCani = "";
        $alternar = true;
        for ($i = 0; $i<strlen($frase); $i++) {
            if ($frase[$i]=== " ") {
                $fraseCani.= " ";
            } else {
                if ($alternar) {
                    $frase[$i] = strtoupper($frase[$i]); 
                } else {
                    $frase[$i] = strtolower($frase[$i]);
                }
                $alternar = $alternar ? false : true; 
            }
        }
        return $frase;
    }
    echo convierteCani($input);
    
    ?>