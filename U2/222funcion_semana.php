<?php
    ;
    function dia_semana(){
        $semana=[
            "lunes",
            "martes",
            "miercoles",
            "jueves",
            "viernes",
            "sabado",
            "domingo",
        ];
        $num = rand(0,count($semana)-1);
        return $semana[$num];
    }
    echo "Nos iremos al cine el ".dia_semana();
