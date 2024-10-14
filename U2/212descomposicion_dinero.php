
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Miguel Fernandez" content="RGG">
    <title>Ejer212</title>
</head>
<body>
    <h1>Ejercicio 212</h1>
    <p>A partir de una cantidad de dinero, mostrar su descomposición en billetes (500, 200, 100, 50, 20, 10, 5) y monedas (2, 1), para que el número de elementos sea mínimo (no se muestra si no hay).</p>
    <?php
    $dinero = 10243;
    $billetes=[
        500,
        200,
        100,
        50,
        20,
        10,
        5,
        2,
        1,
    ];
    for ($i=0; $i < count($billetes); $i++) { 
        $cont = 0;
        if ($dinero>=$billetes[$i]) {
            while ($dinero-$billetes[$i]>=0) {
                $dinero=$dinero-$billetes[$i];
                $cont++;
            }
        }
        if ($cont>0) {
            if ($billetes[$i]>=5) {
                echo "Hay $cont billetes de $billetes[$i] <br>";
            } else {
                echo "Hay $cont monedas de $billetes[$i] <br>";
            }
        }
        
    }
?>
</body>
</html>
