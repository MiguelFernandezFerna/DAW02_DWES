<?php
    /*buscamos la cookie "visitas"
    si no existe se crea con valor 1 
    si existe, se suma 1
    */

    if (!isset($_COOKIE['visitas'])) {
        setcookie('visitas',1, time()+24*60*60);
        echo "Bienvenido por primera vez <br><br>";
    } else {
        $visitas = (int) $_COOKIE['visitas'];

        $visitas++;
        setcookie('visitas',$visitas,time()+24*60*60);
        echo "Bienvenido por $visitas vez <br><br>";
    }

    echo "<button><a href=borrarCookies1.php>Borrar</a></button>";
    
?>

