<?php
    session_start();
    echo "La sesión es: ". $_SESSION['nombre'];

    echo "<br><a href='sesiones_eliminar_2.php'>Destruye la sesión</a>";