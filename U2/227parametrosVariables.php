<?php
//los 32 puntos sirven para meter ahí un número indefinido de valores luego a la hora de llamar al método
    function mayor(...$a){
        $mayor =$a[0];
        $array = func_get_args();
        foreach ($array as $valores) {
            if ($valores>$mayor) {
                $mayor=$valores;
            }
        }
        return $mayor;
    }
    function concatenar(...$palabras){
        $frase= "";
        foreach ($palabras as $palabra) {
            $frase= $frase." ".$palabra;
        }
        return $frase;
    }

    $mayores = mayor(3,59,34);
    print_r($mayores);
    echo "<br>";

    $frases=concatenar("Jose","Luis","Torrente");
    print_r($frases);
