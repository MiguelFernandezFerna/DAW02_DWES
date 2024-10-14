<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Miguel Fernandez" content="MFF">
    <title>Ejercicio 221</title>
</head>
<body>
    <h1>Ejercicio 221</h1>
    <p>221mi_altura: Modifica el ejercicio anterior para que enviado un nombre vía URL me indique mi altura y si está por encima o por debajo de la media (muestra la media).</p>
    <?php
        $array=[
            "Miguel_O"=>1.70,
            "Javier"=>1.75,
            "Ivan"=>1.84,
            "Luisda"=>1.73,
            "Asier"=>1.77,
        ];
        $nombreURL=$_GET["nombre"];
    ?>
    <table border="solid"cellspacing="0">
    <?php
    $alturas = 0;
    $alturaURL=0;
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
            if ($nombreURL==$nombre) {
                $alturaURL=$altura;
            }
        }
        echo "<tr>";
        echo "<th>";
            echo "Altura media: ";
        echo "</th>";
        echo "<td>";
            echo $alturas/count($array);
        echo "</td>";
        echo "</tr>";
        echo "<br>";
    ?>
    </table>
    <?php
    echo "<br>";
        echo "Nombre pedido: $nombreURL";
        echo "<br>";
        if ($alturaURL>($alturas/count($array))) {
            echo "La altura del nombre pedido es $alturaURL y es mayor a la media";
        } else if ($alturaURL<($alturas/count($array))) {
            echo "La altura del nombre pedido es $alturaURL y es menor a la media";
        }
    ?>
</body>
</html>