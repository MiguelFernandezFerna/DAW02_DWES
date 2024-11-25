<?php
    chdir('c:/Users/miguel.ferfer/Documents/xampp/htdocs');
    $directorio = "misPHP";
    $archivos = scandir($directorio, 1);
    print_r($archivos);