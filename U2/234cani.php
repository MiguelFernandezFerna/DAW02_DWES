<?php
    $input = "Si el muxaxo te basila tu t kaya i lo asimila";
    
    
    function convierteCani ($frase) {
        $fraseCani = "";
        $alternar = true;
        for ($i = 0; $i<strlen($frase); $i++) {
            if ($frase[$i]=== " ") {
                //El .= sirve para concaternar strings
                $fraseCani.= " ";
            } else {
                if ($alternar) {
                    $frase[$i] = strtoupper($frase[$i]); 
                } else {
                    $frase[$i] = strtolower($frase[$i]);
                }
                /*Esta línea de abajo equivale a:
                if ($alternar){
                    $alternar = false;
                }else{
                    $alternar = true;
                }
                */
                $alternar = $alternar ? false : true; 
            }
        }
        return $frase;
    }
    echo convierteCani($input);
    
    ?>
