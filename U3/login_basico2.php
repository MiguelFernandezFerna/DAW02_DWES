<?php
//Falla porque el nombre de las variables que hay aquí y los que hay en el html son diferentes
if(isset($_POST["nombre"], $_POST["edad"])){ //Deben existir ambos 
     echo "Hola". $_POST["nombre"]." tienes ".$_POST["edad"]." edad.";    

}else{
    echo "Error, falta el nombre y/o edad";

}