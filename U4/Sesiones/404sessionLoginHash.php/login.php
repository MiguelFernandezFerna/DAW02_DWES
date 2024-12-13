<?php
//confirma que se ha enviado algo
    if (isset($_POST['enviar'])) {
        $usuario = $_POST['inputUsuario'];
        $password = $_POST['inputPassword'];

        //validamos la contraseña
        $cadena_cifrada = password_hash("admin", PASSWORD_DEFAULT);

        $comprobada = password_verify($password, $cadena_cifrada);
//condiciona que si uno de los campos está vacío que salga un mensaje
        if (empty($usuario)||empty($password)) {
            $error = "Debes introducir un usuario y una contraseña";
            include "index_.php";
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