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
        $a = 3;
        $b = 6;
        $c = 2;

        $ecuacion;
        $discr = $b**2 - 4*$a*$c;
        if ($discr > 0 ) {
            $ecuacion = (-$b+sqrt($b**2-(4*$a*$c)))/(2*$a);
            echo "Primera solución: $ecuacion <br>";
            $ecuacion = (-$b-sqrt($b**2-(4*$a*$c)))/(2*$a);
            echo "Segunda solución: $ecuacion <br>";

        } else if ($discr === 0) {
            $ecuacion = (-$b)/2*$a;
        } else {
                echo "La ecuación no tiene solución, el discriminante es negativo";
        }
    ?>
</body>
</html>