<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Miguel Fernandez" content="MFF">
    <title>Ejercicio 216</title>
</head>
<body>
    <h1>Ejercicio 216</h1>
    <p>Muestra dentro de una tabla HTML la tabla de multiplicar del número que reciba como parámetro por URL. Utiliza <thead> con sus respectivos <th> y <tbody> para dibujar la tabla.</p>
    <?php
        $multiplicar=$_GET["num"];
    ?>
    <h3>Tabla del 
        <?php
        echo $multiplicar;
        ?>
    </h3>
    <table border="solid"cellspacing="0">
    <thead>
        <?php
            for ($i=1; $i < 11; $i++) { 
                echo "<th>$i</th>";
            }
        ?>
    </thead>
    <tbody>
        <tr>
        <?php
            $num = 0;
            for ($i=1; $i < 11; $i++) { 
                $num = $i*$multiplicar;
                echo "<td>$num</td>";
            }
        ?>
        </tr>
    </tbody>
    </table>
</body>
</html>