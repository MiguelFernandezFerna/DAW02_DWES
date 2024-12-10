<?php
    session_start();
    if (!isset($_SESSION['nombre'])) {
        $_SESSION['nombre']="Juan";
    } else {
        $_SESSION['nombre']="Manolo";
    }
    echo "hola ". $_SESSION['nombre'];
    echo "<br><a href='sesiones_unirse_2.php'>Me uno a la sesión</a>";