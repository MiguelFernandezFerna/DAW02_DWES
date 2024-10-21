<?php
    $tamaño=10;
    function generaContrasenya($tamaños){
        $contraseña = "";
        for ($i=0; $i < $tamaños; $i++) {
            //num ramdom que nos hara elegir entre numeros, letras y caracteres especiales
            $num = rand(0,2); 
            if ($num==0) {
                $numContraseña = rand(0,9);
                $contraseña.=$numContraseña;
            }elseif ($num==1) {
                //ponemos un numero ramdom, que distinguira entre mayuscukas y minusculas
                $numLetra = rand(0,1);
                if ($numLetra==0) {
                    //Letras en mayusculas
                    $letra = chr(rand(65, 90));
                    $contraseña.=$letra;
                } else {
                    //letras en minusculas
                    $letra = chr(rand(97, 122));
                    $contraseña.=$letra;
                }
            }else if ($num==2) {
                
                $numCaracter = rand(0,1);
                if ($numCaracter==0) {
                    $caracter = chr(rand(33,47));
                    $contraseña.=$caracter;
                }else {
                    $caracter= chr(rand(58,64));
                    $contraseña.=$caracter;

                }
            }
        }
        return $contraseña;
    }

    $contrasenya = generaContrasenya($tamaño);


    function comprobarContraseña($contrasenyas,$tamaños){
        $longitud = false;
        $mayusc = false;
        $numeros = false;
        $caracter = false;
        $minusc=false;

        if (strlen($contrasenyas)==$tamaños) {
            $longitud=true;
        }

        for ($i=0; $i < $tamaños; $i++) { 
            if (ord($contrasenyas[$i])>64&&ord($contrasenyas[$i])<91) {
                $mayusc=true;
            }

            if (ord($contrasenyas[$i])>96&&ord($contrasenyas[$i])<123) {
                $minusc=true;
            }

            if (ord($contrasenyas[$i])>47&&ord($contrasenyas[$i]<58)) {
                $numeros=true;
            }

            if (ord($contrasenyas[$i])>32&&ord($contrasenyas[$i])<48||ord($contrasenyas[$i])>57&&ord($contrasenyas[$i])<65) {
                $caracter=true;
            }
        }
        if ($longitud==true&&$mayusc==true&&$numeros==true&&$caracter==true&&$minusc==true) {
            return $contrasenyas;
        }else{
            return "Dele al f5 para generar otra, esta no vale";
        }

    }

    echo comprobarContraseña($contrasenya,$tamaño);

    
    
    