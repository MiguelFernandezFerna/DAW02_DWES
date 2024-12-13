<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<button id="Insertar"><a href="formulario_agregar_usuario.php" id="insertar">Registrarse</a></button>
    <form action="login.php" method="post">
        <fieldset>
            <legend>Login</legend>
            <?php
            //mete el mensaje de error correspondiente del login
                if (isset($error)) {
                    echo $error;
                }
            ?>
            <?php
            //mete el mensaje de error correspondiente del login
                if (isset($_GET["loginEnIndex"])) {
                    echo "Haz login para entrar en esta página <br>";
                }
            ?>
            <label for="usuario">Usuario: </label><br>
            <input type="text" name="inputUsuario" id="usuario" maxlength="50"><br>

            <label for="password">Contraseña: </label><br>
            <input type="password" name="inputPassword" id="password" maxlength="50"><br><br>

            <input type="submit" value="Enviar" name="enviar">
        </fieldset>
    </form>
</body>
</html>