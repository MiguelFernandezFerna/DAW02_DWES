<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar alumno</title>
    <link rel="stylesheet" href="../estiloFormularios.css">
</head>
<body>
    <header>
        <h1>Procederemos a agregar un alumno nuevo:</h1>
    </header>
    <main>
        <form action="../../controlador/admin/insertarAlumno.php" method="POST" enctype="multipart/form-data">
            <label for="dni" id="dni">DNI: </label>
            <input type="text" name="dni" id="dni"><br><br>

            <label for="nombre" id="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre"><br><br>

            <label for="apellido1">Primer apellido: </label>
            <input type="text" name="apellido1" id="apellido1"><br><br>

            <label for="apellido2" id="apellido2">Segundo apellido: </label>
            <input type="text" name="apellido2" id="apellido2"><br><br>

            <label for="email" id="email">Email: </label>
            <input type="text" name="email" id="email"><br><br>

            <label for="telefono" id="telefono">Número de teléfono: </label>
            <input type="text" name="telefono" id="telefono"><br><br>

            <label for="curso">Curso perteneciente: </label>
            <input type="text" name="curso" id="curso"><br><br>

            <input type='submit' value="Enviar" id="enviar"><br>
            <button><a href='paginaAdmin.php'>Cancelar</a></button>
        </form>
    </main>
    <footer>
        <h4>Miguel Fernández</h4>
    </footer>