<?php
    //Iniciamos sesión
    session_start();
    //quitamos las variables de la sesion
    session_unset();
    //destruimos sesion
    session_destroy();

    header("Location: sesiones_crear_2.php");