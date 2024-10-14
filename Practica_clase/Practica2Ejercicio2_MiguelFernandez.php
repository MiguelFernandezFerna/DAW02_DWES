<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <table border="solid" cellspacing="0">
        <thead>
        <th>Clase A</th>
        <th>Clase B</th>
        <th>Clase C</th>
        <th>Total</th>
        </thead>
        <tbody>
        <?php
            $datos_notas = [];
            $a=[];
            $b=[];
            $c=[];
            $totalA=0;
            $totalS = 0;
            $mediaT = 0;
            $nota = 0;
            $aprobados = 0;
            $suspenso = 0;
            $media = 0;
            for ($i=0; $i < 90; $i++) { 
                $nota = rand(0,10);
                if ($i<=29) {
                    array_push($a,$nota);
                } elseif ($i>29&&$i<=59) {
                    array_push($b,$nota);
                }else {
                    array_push($c,$nota);
                }
            }
    
                for ($i=0; $i < count($a); $i++) { 
                    if ($a[$i]>=5) {
                        $aprobados++;
                        
                    } else {
                        $suspenso++;
                    }
                    $media = $media+$a[$i];
                }
                $totalA = $totalA+$aprobados;
                $totalS = $totalS+$suspenso;
                $media = $media/count($a);
                $mediaT = $mediaT+$media;
                for ($i=0; $i < 30; $i++) { 
                    echo "<tr>";
                    echo "<td>";
                        echo "Aprobados: $aprobados <br>";
                        echo "Suspensos: $suspenso <br>";
                        echo "Media: $media <br>";
                    echo "</td>";
                    echo "<td>";
                    for ($i=0; $i < count($b); $i++) { 
                        if ($b[$i]>=5) {
                            $aprobados++;
                        } else {
                            $suspenso++;
                        }
                        $media = $media+$b[$i];
                    }
                    $totalA = $totalA+$aprobados;
                $totalS = $totalS+$suspenso;
                    $media = $media/count($b);
                    $mediaT = $mediaT+$media;
                    echo "Aprobados: $aprobados <br>";
                    echo "Suspensos: $suspenso <br>";
                    echo "Media: $media <br>";
                    echo "</td>";
                    for ($i=0; $i < count($c); $i++) { 
                        if ($c[$i]>=5) {
                            $aprobados++;
                        } else {
                            $suspenso++;
                        }
                        $media = $media+$c[$i];
                    }
                    $totalA = $totalA+$aprobados;
                $totalS = $totalS+$suspenso;
                    $media = $media/count($c);
                    $mediaT = $mediaT+$media;
                    $mediaT = $mediaT/3;
                    echo "<td>";
                    echo "Aprobados: $aprobados <br>";
                    echo "Suspensos: $suspenso <br>";
                    echo "Media: $media <br>";
                    echo "</td>";

                    echo "<td>";
                    echo "Aprobados: $totalA<br>";
                    echo "Suspensos: $totalS <br>";
                    echo "Media: $mediaT <br>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>