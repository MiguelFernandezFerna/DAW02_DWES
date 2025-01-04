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
        <h1>Procederemos a agregar un proyecto nuevo:</h1>
    </header>
    <main>
        <form action="../../controlador/admin/insertar.php" method="POST" enctype="multipart/form-data">
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
            <input type='file' id='pdf_proyecto' name='pdf_proyecto'><br><br>
            <?php
                include("../../config/conexion.php");

                $conectar = conexion();
                $consulta = "select * from alumnos";
                $sentencia = $conectar -> prepare($consulta);
                $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
                $sentencia -> execute();
                $listaAlumnos = $sentencia -> fetchAll();
            ?>
            <label for="alumno" id="alumno">Alumno: </label>
            <select name="alumno" id="alumno">
            <?php 
                foreach ($listaAlumnos as $alumno){?>
                    <option value=<?=$alumno["id_alumno"]?>>
                        <?=$alumno["nombre"]?>
                    </option>
            <?php ;}?>
            </select><br><br>
            <?php
                $consulta2 = "select * from tutor";
                $sentencia2 = $conectar -> prepare($consulta2);
                $sentencia2 -> setFetchMode(PDO::FETCH_ASSOC);
                $sentencia2 -> execute();
                $listaTutores = $sentencia2 -> fetchAll();
            ?>
            <label for="tutor" id="tutor">Tutor: </label>
            <select name="tutor" id="tutor">
            <?php 
                foreach ($listaTutores as $tutor){?>
                    <option value=<?=$tutor["id_tutor"]?>>
                        <?=$tutor["nombre"]?>
                    </option>
            <?php ;}?>
            </select><br><br>
            <?php
                $consulta3 = "select * from modulos";
                $sentencia3 = $conectar -> prepare($consulta3);
                $sentencia3 -> setFetchMode(PDO::FETCH_ASSOC);
                $sentencia3 -> execute();
                $listaModulo1 = $sentencia3 -> fetchAll();
            ?>
            <label for="modulo1" id="modulo1">Modulo 1: </label>
            <select name="modulo1" id="modulo1">
            <?php 
                foreach ($listaModulo1 as $modulo1){?>
                    <option value=<?=$modulo1["id_modulo"]?>>
                        <?=$modulo1["siglas"]?>
                    </option>
            <?php ;}?>
            </select><br><br>
            <?php
                $consulta4 = "select * from modulos";
                $sentencia4 = $conectar -> prepare($consulta4);
                $sentencia4 -> setFetchMode(PDO::FETCH_ASSOC);
                $sentencia4 -> execute();
                $listaModulo2 = $sentencia4 -> fetchAll();
            ?>
            <label for="modulo2" id="modulo2">Modulo 2: </label>
            <select name="modulo2" id="modulo2">
            <?php 
                foreach ($listaModulo2 as $modulo2){?>
                    <option value=<?=$modulo2["id_modulo"]?>>
                        <?=$modulo2["siglas"]?>
                    </option>
            <?php ;}?>
            </select><br><br>
            <?php
                $consulta5 = "select * from modulos";
                $sentencia5 = $conectar -> prepare($consulta5);
                $sentencia5 -> setFetchMode(PDO::FETCH_ASSOC);
                $sentencia5 -> execute();
                $listaModulo3 = $sentencia5 -> fetchAll();
            ?>
            <label for="modulo3" id="modulo3">Modulo 3: </label>
            <select name="modulo3" id="modulo3">
            <?php 
                foreach ($listaModulo3 as $modulo3){?>
                    <option value=<?=$modulo3["id_modulo"]?>>
                        <?=$modulo3["siglas"]?>
                    </option>
            <?php ;}?>
            </select><br><br>
            <input type='submit' value="Enviar" id="enviar"><br>
            <button><a href='paginaAdmin.php'>Cancelar</a></button>
        </form>
    </main>
    <footer>
        <h4>Miguel Fernández</h4>
    </footer>
</body>
</html>