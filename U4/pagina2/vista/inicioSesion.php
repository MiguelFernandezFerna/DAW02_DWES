<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <!-- Solo funciona el boton de registrarse si no hacemos una acción antes, si la hacemos nos cambia de carpeta de forma misteriosa -->
<button id="Insertar"><a href="formulario_agregar_usuario.php" id="insertar">Registrarse</a></button>
    <form action="../controlador/login.php" method="post">
        <fieldset>
            <legend>Inicio de Sesión</legend>
            <?php
            //mete el mensaje de error correspondiente del login
                if (isset($error)) {
                    echo $error."<br>";
                }
            ?>
            <?php
            //mete el mensaje de error correspondiente del login
                if (isset($_GET["loginEnIndex"])) {
                    echo "Haz login para entrar en esta página <br>";
                }
            ?>
            <label for="login">Usuario: </label><br>
            <input type="text" name="login" id="login" maxlength="50"><br>

            <label for="password">Contraseña: </label><br>
            <input type="password" name="password" id="password" maxlength="50"><br><br>

            <input type="submit" value="Enviar" name="enviar">
        </fieldset>
    </form>
</body>
</html>