<?php
    $edad=rand(1,70);
    $sueldo=rand(1000,4000);

    function calcularSueldo($edades,$sueldos){
        $sueldoAntiguo = $sueldos;
        if ($edades<16) {
            $edades=16;
        }
        //si el sueldo esta entre 3000 y 2000 y la edad es mayor a 40 aumentamos un 20%
        if ($sueldos<3000&&$sueldos>2000&&$edades>40) {

            $sueldos=$sueldos+(($sueldos*20)/100);

        }elseif ($sueldos<3000&&$sueldos>2000) {
            //Si la edad no es mayor a 40 solamente un 13%
            $sueldos=$sueldos+(($sueldos*13)/100);
        }
        //si la edad es menor a 30 y su salario es menor a 2000 le ponemos 2030 euros de salario
        if ($sueldos<2000&&$edades<30) {
            $sueldos=2030;
            //si el sueldo es menor de 2000 pero la edad esta entre 30 y 40 le subimos un 4% el sueldo
        }elseif ($sueldos<2000&&$edades>30&&$edades<40) {
            $sueldos=$sueldos+(($sueldos*4)/100);
        }else{
            //en cualquier otro caso le subimos un 15%
            $sueldos=$sueldos+(($sueldos*15)/100);
        }
        //imprimimos todo lo que hace este codigo
        echo "Edad: $edades <br>";
        echo "Sueldo anterior: $sueldoAntiguo<br>";
        echo "Sueldo nuevo: $sueldos<br>";
        echo "Fecha del cambio: ".date("j.n.o", time())."<br>";

    }

    echo calcularSueldo($edad,$sueldo);

