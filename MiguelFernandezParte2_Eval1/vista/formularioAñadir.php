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
        <form action="../controlador/añadir.php" method="POST" enctype="multipart/form-data">
            <label for="titulo">Titulo: </label>
            <input type="text" id="titulo" name="titulo"><br><br>

            <label for='descripcion' id='descripcion'>Descripcion:</label>
            <input type='text' id='descripcion' name='descripcion'><br><br>

            <label for="fecha" id="fecha">Fecha</label>
            <input type="text" name="fecha" id="fecha"><br><br>

            <label for='prioridad' id='prioridad'>Prioridad:</label>
            <input type='text' id='prioridad' name='prioridad'><br><br>

            <label for='imagen' id='imagen'>Imagen:</label>
            <input type='file' id='imagen' name='imagen'><br><br>

            <label for="realizada" id="realizada">Realizada: </label>
            <input type="text" id="realizada" name="realizada"><br><br>

            <input type='submit' value="Enviar" id="enviar"><br>
        </form>
    </main>
    <footer>
        <h4>Miguel Fernández</h4>
    </footer>
</body>
</html>