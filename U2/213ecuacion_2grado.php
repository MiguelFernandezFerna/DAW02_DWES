<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Miguel Fernandez" content="MFF">
    <title>Ejercicio 213</title>
</head>
<body>
    <h1>Ejercicio 213</h1>
    <p>crea un programa que resuelva una ecuación de 2º grado del tipo ax² + bx + c = 0. Ten en cuenta que puede tener 2, 1 o no tener solución dependiendo del valor del discriminante b²-4ac. Para calcular la raíz cuadrada deberás utilizar la función sqrt().</p>
    <?php
        $a=1;
        $b=1;
        $c=0;
        $discriminante = ($b*$b)-4*$a*$c;
        if ($discriminante=0) {
            $result0=(-$b+sqrt($discriminante))/2*$a;
            echo "La solución es: $result0";
        } else if($discriminante<0){
            echo "No hay solución";
        }else{
        $result1 = -$b+sqrt($discriminante)/(2*$a);
        echo "El primer resultado es: $result1 <br>";
        $result2 =-$b+sqrt($discriminante)/(2*$a);
        echo "El segundo resultado es: $result2";
        }
    ?>
</body>
</html>