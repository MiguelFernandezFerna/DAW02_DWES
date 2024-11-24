<?php
//si el parentesis de capitales no tiene nada, entonces aparecerán todos
    function capitales($paises=""){
        $capitales=[
            "España"=>"Madrid",
            "Francia"=>"París",
            "Albania"=>"Tirana",
            "Italia"=>"Roma",
            "Noruega"=>"Oslo",
        ];
        if (isset($capitales[$paises])) {
            return $capitales[$paises];
        } else{
            print_r($capitales);
        }
    }
    echo capitales();