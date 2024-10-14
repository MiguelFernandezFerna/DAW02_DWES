<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Miguel Fernandez" content="MFF">
    <title>Ejercicio 220</title>
</head>
<body>
    <h1>Ejercicio 220</h1>
    <p>220alturas: Mediante un array asociativo, almacena el nombre y la altura de 5 personas (nombre => altura). Posteriormente, recorre el array y muéstralo en una tabla HTML. Finalmente añade una última fila a la tabla con la altura media.</p>

    <?php
        $array=[
            "Miguel"=>1.70,
            "Javier"=>1.75,
            "Ivan"=>1.84,
            "Luisda"=>1.73,
            "Asier"=>1.77,
        ];
    ?>
    <table border="solid"cellspacing="0">
    <?php
    $alturas = 0;
        foreach ($array as $nombre => $altura) {
            $alturas=$alturas+$altura;
            echo "<tr>";
                echo "<th>";
                    echo $nombre;
                echo "</th>";
                echo "<td>";
                    echo $altura;
                echo "</td>";
            echo"</tr>";
        }
        echo "<tr>";
        echo "<th>";
            echo "Altura media: ";
        echo "</th>";
        echo "<td>";
            echo $alturas/count($array);
        echo "</td>";
        echo "</tr>";
    ?>
    </table>
</body>
</html>