<?php
    //Iniciamos sesión
    session_start();
    //quitamos las variables de la sesion
    session_unset();
    //destruimos sesion
    session_destroy();
    header("Location: index_.php");
?>