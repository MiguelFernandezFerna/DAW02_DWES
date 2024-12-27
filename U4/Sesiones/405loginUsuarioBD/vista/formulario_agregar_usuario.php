<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar alumno</title>
    <link rel="stylesheet" href="estiloFormularios.css">
</head>
<body>
    <header>
        <h1>Procederemos a agregar un usuario nuevo:</h1>
    </header>
    <main>
        <form action="../controlador/agregar_usuario.php" method="POST" enctype="multipart/form-data">
            <label for='login' id='login'>Nombre de usuario:</label>
            <input type='text' id='login' name='login'><br><br>
            
            <label for='password' id='password'>Contraseña:</label>
            <input type="password" id='password' name='password'><br><br>

            <label for="tipo_usu">Tipo de usuario: </label>
            <input type="number" id="tipo_usu" name="tipo_usu"><br><br>

            <input type='submit' value="Enviar" id="enviar"><br>
        </form>
    </main>
    <footer>
        <h4>Miguel Fernández</h4>
    </footer>
</body>
</html>