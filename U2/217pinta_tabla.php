<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Miguel Fernandez" content="MFF">
    <title>Ejercicio 217</title>
</head>
<body>
    <h1>Ejercicio 217</h1>
    <p>A partir de un número de filas y columnas, crear una tabla con ese tamaño. Las celdas deben estar rellenadas con los valores de las coordenadas de cada celda.</p>

    <table border="solid" cellspacing="0">
    <?php
        $filas=5;
        $columnas = 3;
        for ($i=0; $i < $filas; $i++) { 
            echo "<tr>";
            for ($j=0; $j < $columnas; $j++) { 
                echo "<td>($i,$j)</td>";
            }
            echo "</tr>";
        }    
    ?>
    </table>
</body>
</html>