    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Examen</title>
        <link rel="stylesheet" href="pagina1Estilo.css">
    </head>
    <body>
        <button id="Insertar"><a href="formularioAñadir.php" id="insertar">Insertar</a></button>
        <table>
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Prioridad</th>
                <th>Imagen</th>
                <th>Realizada</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                <?php
                    include("visualizarTareas.php");
                    visualizarDatos();
                ?>
            </tbody>
        </table>
    </body>
    </html>