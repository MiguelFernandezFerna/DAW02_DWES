<?php

    function bancos($capital){
        $bancos = array(
            array("Nombre" => "solidez", 
            "Interes" => "simple",
            "%_Anual"=>5,
            "Comision"=>(4.5*$capital)/100),

            array("Nombre" => "prosperis",
            "Interes" => "simple",
            "%_Anual"=>4,
            "Comision"=>50),

            array("Nombre" => "aureo",
            "Interes" => "compuesto",
            "%_Anual"=>6,
            "Comision"=>200),
        );
        return $bancos;
    }
//El tiempo hay que ponerlo en meses
    function listadoBancos($capital, $trimeste){
        $meses = $trimeste*3;
        if ($capital<1000) {
            $capital=1000;
        }
        if ($meses%3!=0) {
            $meses = 3;
        }
        $bancos = bancos($capital);

        foreach ($bancos as $banco) {
            foreach ($banco as $tipoDato => $valor) {
                echo "$tipoDato: $valor <br>";
            }
            echo "<br>";
        }
    }
    echo "Funcion listadoBancos: <br><br>";
    listadoBancos(2000,3);

    //Ejercicio 2
    function caracteristicasBanco($nombreBanco,$capital, $trimeste){
        $meses = $trimeste*3;
        if ($capital<1000) {
            $capital=1000;
        }
        if ($meses%3!=0) {
            $meses = 3;
        }
        $nombreBanco=strtolower($nombreBanco);

        $bancos = bancos($capital);
        foreach ($bancos as $banco) {
            foreach ($banco as $tipoDato => $valor) {
                if ($tipoDato=="Nombre"&&$valor==$nombreBanco) {
                    foreach ($banco as $tipoDato => $valor) {
                        echo "$tipoDato: $valor <br>";
                    }
                }
            }
            echo "<br>";
        }

    }
    echo "Funcion caracteristicasBanco: <br>";
    caracteristicasBanco("SOLIDEZ",2000,3);

    //Ejercicio 3
    function resultadosTiempoBanco($nombreBanco,$capital, $trimeste){
        $meses = $trimeste*3;
        if ($capital<1000) {
            $capital=1000;
        }
        if ($meses%3!=0) {
            $meses = 3;
        }
        $nombreBanco=strtolower($nombreBanco);

        $bancos = bancos($capital);
        foreach ($bancos as $banco) {
            foreach ($banco as $tipoDato => $valor) {
                if ($tipoDato=="Nombre"&&$valor==$nombreBanco) {
                    if ($nombreBanco == "solidez") {
                        $interesAnual = 5;
                        $interesSimple = $capital+$capital*$interesAnual*$meses/12-((4.5*$capital)/100);
                        $interesCompuesto = $capital*(1+$interesAnual)**($meses/12)-((4.5*$capital)/100);
                    }

                    if ($nombreBanco == "prosperis") {
                        $interesAnual = 4;
                        $interesSimple = $capital+$capital*$interesAnual*$meses/12-50;
                        $interesCompuesto = $capital*(1+$interesAnual)**($meses/12)-50;
                    }

                    if ($nombreBanco == "aureo") {
                        $interesAnual = 6;
                        $interesSimple = $capital+$capital*$interesAnual*$meses/12-200;
                        $interesCompuesto = $capital*(1+$interesAnual)**($meses/12)-200;
                    }

                    foreach ($banco as $tipoDato => $valor) {
                        if ($tipoDato=="Interes"&&$valor="simple") {
                            $valor = $interesSimple;
                        }

                        if ($tipoDato=="Interes"&&$valor="compuesto") {
                            $valor = $interesCompuesto;
                        }
                        echo "$tipoDato: $valor <br>";
                    }
                }
            }
            echo "<br>";
        }
    }
echo "Función de resultadosTiempoBanco para 6 meses; <br><br>";
resultadosTiempoBanco("SOLIDEZ",2000,2);
echo "Función de resultadosTiempoBanco para 1 año; <br><br>";
resultadosTiempoBanco("SOLIDEZ",2000,4);
echo "Función de resultadosTiempoBanco para 5 años; <br><br>";
resultadosTiempoBanco("SOLIDEZ",2000,20);

function comparativaBancos($capital, $trimestre){
    $meses = $trimestre*3;
    if ($capital<1000) {
        $capital=1000;
    }
    if ($meses%3!=0) {
        $meses = 3;
    }
    $bancos = bancos($capital);
    foreach ($bancos as $banco) {
        foreach ($banco as $tipoDato => $valor) {
            echo "<table border=solid cellspacing=0>";
            echo "<tr>";
            echo "<th>$tipoDato</th>";
            echo "<td>$valor</td>";
            echo "</tr>";
            echo "</table>";
        }
        echo "<br>";
    }
}

echo "Funcion comparativaBancos: <br>";
comparativaBancos(2000,3);

function ordenarDatos($capital, $trimestre){
    $meses = $trimestre*3;
    if ($capital<1000) {
        $capital=1000;
    }
    if ($meses%3!=0) {
        $meses = 3;
    }
    $bancos = bancos($capital);

    foreach ($bancos as $banco) {
        asort($banco);
        foreach ($banco as $tipoDato => $valor) {
            echo "$tipoDato: $valor <br>";
        }
        echo "<br>";
    }
}

echo "Funcion ordenarDatos: <br>";
ordenarDatos(2000,3);



    // $nombres=[];
    // $sueldos=[];
    // foreach ($banco as $empleado) {
    //     foreach ($empleado as $nombre => $sueldo) {
    //         echo "$nombre: $sueldo ";
    //         array_push($nombres,$nombre);
    //         array_push($sueldos,$sueldo);
    //     }
    //     echo "<br>";
    // }