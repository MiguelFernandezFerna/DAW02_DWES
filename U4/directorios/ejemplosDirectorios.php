<?php
    //Directorio actual: /C:\Users\miguel.ferfer\Documents\xampp\htdocs\misPHP\U4\directorios
    echo getcwd(). "<br>";
    //Directorio: Carpeta del directorio actual
    chdir('../../U4');
    echo getcwd(). "<br>";
    //Directorio: 
    chdir('c:/Users/miguel.ferfer/Documents/xampp/htdocs');
    echo getcwd()."<br>";

