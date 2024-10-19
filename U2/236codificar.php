<?php
//236codificar.php: utilizando las funciones para trabajar con caracteres, a partir de una cadena y un desplazamiento:
//Si el desplazamiento es 1, sustituye la A por B, la B por C, etc.
// El desplazamiento no puede ser negativo
// Si se sale del abecedario, debe volver a empezar
// Hay que respetar los espacios, puntos y comas.

$num=2;
$frase = ".Juan Luis. es, un buen profesor Zz,";

function cambiar($frase, $num) {
    $salida = "";
    for ($i = 0;$i<strlen($frase);$i++) {
        //con ord cogemos el numero de la tabla ascii correspondiente a la letra
        //El 32 es el espacio, y no hay que ponerle
        
        //Aseguramos respetar el espacio
        if (ord($frase[$i]) == 32) {
            $salida.=' ';

            
        }
        //Aseguramos respetar el .
        if (ord($frase[$i]) == 46) {
            $salida.='.';

            
        }
        //Aseguramos respetar la ,
        if (ord($frase[$i]) == 44) {
            $salida.=',';

            
        }
        //una vez pasado los casos especiales transformamos en codigo ascii la letra
        $codigo = ord($frase[$i]);
        //Vemos si el codigo pertenece a las letras en mayusculas
        if ($codigo > 64 && $codigo<91) {
            $numFinal = $codigo +$num;
            //Aquí como en el otro if de después restamos para que no nos aparezca ningún signo que no sea una letra
            //el mínimo sería 27, al ser 91 el número más bajo mayor de 90 habiendole sumado el numero de saltos, y que le llevaría en este caso a la A
            //contaremos el pripio caracter 91 como el numero1 de la resta, por eso no resto 26, sino 27
            if ($numFinal >90) {
                $numFinal-=27;
            }
            //con el chr obtemenos la letra de la tabla ascii correspondiente al número que pongamos, lo contrario al ord
            $salida .= chr($numFinal);
            
        //sino, le pasamos a las minusculas
        }else if ($codigo > 96 && $codigo < 123) {
            //sumamos el codigo ascii de la letra mas los datos para cifrarla
            $numFinal = $codigo + $num;
            if ($numFinal > 122) {
                $numFinal -= 27;  
            }
            //lo mismo que en el otro if, pero si la letra es minuscula
            $salida .= chr($numFinal);
        }

    }
    return $salida;             
}


echo cambiar($frase, $num);



