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

            <label for="modulo1" id="modulo1">Modulo 1: </label>
            <input type="text" id="modulo1" name="modulo1"><br><br>

            <label for="modulo2" id="modulo2">Modulo 2: </label>
            <input type="text" id="modulo2" name="modulo2"><br><br>

            <label for="modulo3" id="modulo3">Modulo 3: </label>
            <input type="text" id="modulo3" name="modulo3"><br><br>

            <?php
                include("../config/conexion.php");

                $conectar = conexion();
                $consulta = "select * from alumnos";
                $sentencia = $conectar -> prepare($consulta);
                $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
                $sentencia -> execute();
                $listaAlumnos = $sentencia -> fetchAll();
            ?>
            <label for="alumno" id="alumno">Alumno:</label>
            <select name="alumno" id="alumno"]>
            <?php 
                foreach ($listaAlumnos as $alumno){?>
                    <option value=<?=$alumno["id_alumno"]?>>
                        <?=$alumno["nombre"]?>
                    </option>
            <?php ;}?>
            </select><br><br>
            <input type='submit' value="Enviar" id="enviar"><br>
        </form>
    </main>
    <footer>
        <h4>Miguel Fernández</h4>
    </footer>
</body>
</html>