<?php
    $num = 4;
    $texto = 'Hola';
    echo "El número es: $num";
    echo "<br>";
    echo 'El número es: $num';
    echo "<br>";
    echo "El texto es: $texto";
    echo "<br>";
    echo 'El texto es: $texto';
    echo "<br><br>";
    echo "Las variables globales:";
    echo "<br><br>";
    echo '$GLOBALS: Hace referencia a todas las variables disponibles en el ámbito global
    <br> Descripción: Es un array asociativo que contiene las referencias a todas la variables que están definidas en el ámbito global del script. 
    <br>Los nombres de las variables son las claves del array.';
    echo "<br><br>";
    echo '$_SERVER: Es un array que contiene información, tales como cabeceras, rutas y ubicaciones de script. 
    <br>Las entradas de este array son creadas por el servidor web. No hay garantía que cada servidor web proporcione alguna de estas entradas, 
    <br>existen servidores que pueden omitir algunas o proporcionar otras no recogidas aquí:<br><br>Ejemplo con la ruta($_SERVER[PHP_SELF](Hay que meter entre comillas simples el php_server)):<br>';
    echo $_SERVER['PHP_SELF'];
    echo "<br><br>";
    echo 'Ejemplo con el nombre del host ($_SERVER[SERVER_NAME](Hay que meter entre comillas simples el server_name)):';
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br><br>";
    echo '$_GET: Un array asociativo de variables pasado al script actual vía parámetros URL <br>
    (también conocida como cadena de consulta). Tenga en cuenta que el array no solo se rellena para las solicitudes GET, <br>
    sino para todas las solicitudes con una cadena de consulta.';
    echo "<br><br>";
    echo '$_POST: Un array asociativo de variables pasadas al script actual a través del método POST de HTTP <br>
    cuando se emplea application/x-www-form-urlencoded o multipart/form-data como Content-Type de HTTP en la petición.';
    echo "<br><br>";
    echo '$_FILES: Un array asociativo de elementos subidos al script en curso a través del método POST.<br>
    La estructura de este array se resume en la sección Subidas con el método POST.';
    echo "<br><br>";
    echo '$_REQUEST: Un array asociativo que por defecto contiene el contenido de $_GET, $_POST y $_COOKIE.';
    echo "<br><br>";
    echo '$_SESSION: Es un array asociativo que contiene variables de sesión disponibles para el script actual. <br>
    Ver la documentación de Funciones de sesión para más información sobre su uso.';
    echo "<br><br>";
    echo '$_ENV: Una variable tipo array asociativo de variables pasadas al script actual a través del método del entorno.';
    echo "<br><br>";
    echo '$_COOKIE: Una variable tipo array asociativo de variables pasadas al script actual a través de Cookies HTTP.';
