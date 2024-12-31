<?php
//confirma que se ha enviado algo
    if (isset($_POST['enviar'])) {
        $usuario = $_POST['login'];
        $password = $_POST['password'];
        
//condiciona que si uno de los campos está vacío que salga un mensaje
        if (empty($usuario)||empty($password)) {
            $error = "Debes introducir un usuario y una contraseña";
            include "../vista/index.php";
            //si el usuario y contraseña son correctos entra a la pagina main, 
            //y sino vuelve a la index con un mensaje 
            //de que no se ha encontrado el usuario
        } else {
            include("../config/conexion.php");
            $conectar = conexion();

            $consulta = "select * from tutor where login = :login";
            $sentencia = $conectar -> prepare($consulta);
            $sentencia -> bindParam(':login', $usuario,PDO::PARAM_STR);
            $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
            $sentencia -> execute();
            
            
            if ($sentencia -> rowCount()!=0) {
                //hacemos fetch normal porque solo es una linea
                $usuarios = $sentencia -> fetch();
                //validamos la contraseña
                $comprobada = password_verify($password, $usuarios["password"]);
                
                if ($comprobada == true) {
                    if ($usuarios["activar"]==1) {
                        if ($usuarios["tipo_usu"]==1) {
                            session_start();
                            $_SESSION['usuario'] = $usuario;
                            $conectar=null;
                            header("Location:../vista/paginaAdmin.php");
                        }else{
                            session_start();
                            $_SESSION['usuario'] = $usuario;
                            $conectar=null;
                            header("Location:../vista/paginaTutor.php");
                        }
                    } else {
                        $error = "Usuario inactivo, espere activación";
                    $conectar=null;
                    include "../vista/inicioSesion.php";
                    }
                    
                }else{
                    $error = "Contraseña incorrecta";
                    $conectar=null;
                    include "../vista/inicioSesion.php";
                }
            } else {
                $error = "Usuario no existe";
                $conectar=null;
                include "../vista/inicioSesion.php";
            }
        }
        
    }