<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD CON PDO</title>
    <link rel="stylesheet" href="pagina2Estilo.css">
</head>
<body>
    <button id="Insertar">Insertar</button>
    <table>
        <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Periodo</th>
            <th>Curso</th>
            <th>Fecha_presentacion</th>
            <th>Nota</th>
            <th>Logotipo</th>
            <th>PDF_Proyecto</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <?php
                include("visualizarProyectos.php");
                visualizarDatos();
            ?>
        </tbody>
    </table>
</body>
</html>