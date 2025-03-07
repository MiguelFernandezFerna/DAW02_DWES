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
        <h1>Procederemos a agregar un alumno nuevo:</h1>
    </header>
    <main>
        <form action="../controlador/agregar_alumno.php" method="post">
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni"><br><br>

            <label for='nombre' id='nombre'>Nombre:</label>
            <input type='text' id='nombre' name='nombre'><br><br>
    
            <label for='apellido1' id='apellido1'>Apellido 1:</label>
            <input type='text' id='apellido1' name='apellido1'><br><br>

            <label for='apellido2' id='apellido2'>Apellido 2:</label>
            <input type='text' id='apellido2' name='apellido2'><br><br>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email"><br><br>
    
            <label for='telefono' id='telefono'>Telefono:</label>
            <input type='text' id='telefono' name='telefono'><br><br>

            <label for="curso">Curso:</label>
            <input type="text" id="curso" name="curso"><br><br>
    
            <input type='submit' value="Enviar" id="enviar"><br>
        </form>
    </main>
    <footer>
        <h4>Miguel Fernández</h4>
    </footer>
</body>
</html>