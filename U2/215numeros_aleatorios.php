<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Miguel Fernandez" content="MFF">
    <title>Ejercicio 215</title>
</head>
<body>
    <h1>Ejercicio 215</h1>
    <p>Genera un array aleatorio de 33 elementos con números comprendidos entre el 0 y 100 y calcula:
    El mayor
    El menor
    La media</p>
    <?php
        $mayor=-1;
        $menor=101;
        $media=0;
        $numeros=[];
        for ($i=0; $i < 33; $i++) { 
            $num=rand(0,100);
            array_push($numeros,$num);
        }
        for ($i=0; $i < count($numeros); $i++) { 
            $media = $media+$numeros[$i];
            if ($numeros[$i]<$menor) {
                $menor=$numeros[$i];
            }
            if ($numeros[$i]>$mayor) {
                $mayor=$numeros[$i];
            }
        }
        $media=$media/33;
        echo "La media es: $media <br>";
        echo "El mayor es: $mayor <br>";
        echo "El menor es: $menor <br>";

    ?>
</body>
</html>