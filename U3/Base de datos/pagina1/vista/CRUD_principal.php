<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer CRUD</title>
    <link rel="stylesheet" href="pagina1Estilo.css">
</head>
<body>
    <button id="Insertar"><a href="formulario_agregar_alumno.php" id="insertar">Insertar</a></button>
    <table>
        <thead>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Curso</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <?php
                include("visualizarAlumnos.php");
                visualizarDatos();
            ?>
        </tbody>
    </table>
</body>
</html>