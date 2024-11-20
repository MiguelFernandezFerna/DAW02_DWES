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
        <form action="../controlador/insertar.php" method="POST" enctype="multipart/form-data">
            <label for='titulo' id='titulo'>Titulo:</label>
            <input type='text' id='titulo' name='titulo'><br><br>
            
            <label for='descripcion' id='descripcion'>Descripcion:</label>
            <input type='text' id='descripcion' name='descripcion'><br><br>

            <label for='periodo' id='periodo'>Periodo:</label>
            <input type='text' id='periodo' name='periodo'><br><br>

            <label for='curso' id='curso'>Curso:</label>
            <input type='text' id='curso' name='curso'><br><br>

            <label for="fecha_presentacion" id="fecha_presentacion">Fecha</label>
            <input type="text" name="fecha_presentacion" id="fecha_presentacion"><br><br>

            <label for='nota' id='nota'>Nota:</label>
            <input type='nota' id='nota' name='nota'><br><br>

            <label for='logotipo' id='logotipo'>Logotipo:</label>
            <input type='file' id='logotipo' name='logotipo'><br><br>

            <label for='pdf_proyecto' id='pdf_proyecto'>PDF Proyecto:</label>
            <input type='text' id='pdf_proyecto' name='pdf_proyecto'><br><br>

            <input type='submit' value="Enviar" id="enviar"><br>
        </form>
    </main>
    <footer>
        <h4>Miguel Fernández</h4>
    </footer>
</body>
</html>