<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Miguel Fernandez" content="MFF">
    <title>Ejercicio 218</title>
    <style>
        th{
            background-color: lightblue;
            color: yellow;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 218</h1>
    <p>Crea un programa que muestre por pantalla una tabla de multiplicar de Pitágoras. Da formato a la columna y fila principales.</p>

    <table border="solid" cellspacing="0">
        <?php
        $contX = 0;
        $contY=0;
            $tabla=10;
            for ($i=0; $i < $tabla+1; $i++) { 
                echo "<tr>";
                for ($j=0; $j < $tabla+1; $j++) { 
                        if ($i==$j&&$i==0&&$j==0) {
                            echo "<th>";
                                echo "X";
                            echo "</th>";
                        }else if($i==0){
                            $contX=$contX+1;
                            echo "<th>";
                            echo $contX;
                            echo "</th>";
                        }else if ($i!=0&&$j!=0) {
                            echo "<td>";
                            echo $i*$j;
                            echo "</td>";
                        }elseif ($j==0&&$i!=0) {
                            $contY=$contY+1;
                            echo "<th>";
                            echo $contY;
                            echo "</th>";
                        }
                }
                echo "</tr>";
            }
            
        ?>
    </table>
</body>
</html>