<?php
$num = $_GET["numero"];
$resultado=1;
 for ($i = 1; $i <= $num; $i++) { 
    $resultado=$resultado*$i;
}
echo $resultado;