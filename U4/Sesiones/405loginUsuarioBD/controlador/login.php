<?php
//confirma que se ha enviado algo
    if (isset($_POST['enviar'])) {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        //validamos la contraseña
        $comprobada = password_verify($password, $cadena_cifrada);
//condiciona que si uno de los campos está vacío que salga un mensaje
        if (empty($usuario)||empty($password)) {
            $error = "Debes introducir un usuario y una contraseña";
            include "index.php";
            //si el usuario y contraseña son correctos entra a la pagina main, 
            //y sino vuelve a la index con un mensaje 
            //de que no se ha encontrado el usuario
        } else {
            if ($usuario == "admin" && $comprobada == true) {
                session_start();
                $_SESSION['usuario'] = $usuario;
                include "main.php";
            } else {
                $error = "Usuario o contraseña no validos";
                include "index_.php";
            }
            
        }
        
    }