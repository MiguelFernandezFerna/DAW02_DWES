<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar usuario</title>
    <link rel="stylesheet" href="estiloFormularios.css">
</head>
<body>
    <header>
        <h1>Procederemos a modificar un proyecto:</h1>
    </header>
    <main>
        <form action="../controlador/modificar.php" method="post">
            <?php
                include("../config/conexion.php");

                $conexion=conexion();
                $idProyecto = $_GET["id_proyecto"];

                $cambiarProyecto = $conexion->prepare("select * from proyecto where id_proyecto =:id_proyecto");
                $cambiarProyecto->bindParam(':id_proyecto', $idProyecto, PDO::PARAM_INT);

                $consulta = "select * from alumnos";
                $sentencia = $conexion -> prepare($consulta);
                $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
                $sentencia -> execute();
                $listaAlumnos = $sentencia -> fetchAll();

                $consultaT = "select * from tutor";
                $sentenciaT = $conexion -> prepare($consultaT);
                $sentenciaT -> setFetchMode(PDO::FETCH_ASSOC);
                $sentenciaT -> execute();
                $listaTutores = $sentenciaT -> fetchAll();

                $consultaM1 = "select * from modulos";
                $sentenciaM1 = $conexion -> prepare($consultaM1);
                $sentenciaM1 -> setFetchMode(PDO::FETCH_ASSOC);
                $sentenciaM1 -> execute();
                $listaModulo1 = $sentenciaM1 -> fetchAll();

                $consultaM2 = "select * from modulos";
                $sentenciaM2 = $conexion -> prepare($consultaM2);
                $sentenciaM2 -> setFetchMode(PDO::FETCH_ASSOC);
                $sentenciaM2 -> execute();
                $listaModulo2 = $sentenciaM2 -> fetchAll();
                
                $consultaM3 = "select * from modulos";
                $sentenciaM3 = $conexion -> prepare($consultaM3);
                $sentenciaM3 -> setFetchMode(PDO::FETCH_ASSOC);
                $sentenciaM3 -> execute();
                $listaModulo3 = $sentenciaM3 -> fetchAll();
    
                //Ejecuto la consulta y si no hay error
                if ($cambiarProyecto->execute()) {
                //obtenemos solo una fila, que será la primera
                    $usuario = $cambiarProyecto->fetch();
                    echo "<input type=hidden name=id_proyecto value=$idProyecto>";
                    echo "
                    <label for='titulo'>Titulo:</label>
                    <input type='text' id='titulo' name='titulo' value='$usuario[titulo]'><br><br>";
                    echo "
                    <label for='descripcion' id='descripcion'>Descripción:</label>
                    <input type=text id='descripcion' name='descripcion' value='$usuario[descripcion]'><br><br>";
                    echo "
                    <label for='periodo' id='periodo'>Periodo</label>
                    <input type='text' id='periodo' name='periodo' value=$usuario[periodo]><br><br>";
                    echo "
                    <label for='curso' id='curso'>Curso: </label>
                    <input type='text' id='curso' name='curso' value=$usuario[curso]><br><br>";
                    echo "
                    <label for='fecha_presentacion' id='fecha_presentacion'>Fecha presentación:</label>
                    <input type='text' id='fecha_presentacion' name='fecha_presentacion' value=$usuario[fecha_presentacion]><br><br>";
                    echo "
                    <label for='nota'>Nota:</label>
                    <input type='text' name='nota' id='nota' value='$usuario[nota]'><br><br>";
                    echo "
                    <label for='pdf_proyecto' id='pdf_proyecto'>PDF Proyecto:</label>
                    <input type='text' id='pdf_proyecto' name='pdf_proyecto' value='$usuario[pdf_proyecto]'><br><br>";
                    echo "
                    <label for='modulo1' id='modulo1'>Modulo 1: </label>
                    <select name='modulo1'>";
                    foreach ($listaModulo1 as $modulo1){
                        if ($usuario["modulo1"]==$modulo1["id_modulo"]) {
                            echo "<option value='$modulo1[id_modulo]' selected>
                                $modulo1[siglas]
                            </option>";
                        }else{
                            echo "<option value='$modulo1[id_modulo]'>
                                $modulo1[siglas]
                            </option>";
                        }
                    }
                    echo "</select><br><br>";
                    echo "
                    <label for='modulo2' id='modulo2'>Modulo 2: </label>
                    <select name='modulo2'>";
                    foreach ($listaModulo2 as $modulo2){
                        if ($usuario["modulo2"]==$modulo2["id_modulo"]) {
                            echo "<option value='$modulo2[id_modulo]' selected>
                                $modulo2[siglas]
                            </option>";
                        }else{
                            echo "<option value='$modulo2[id_modulo]'>
                                $modulo2[siglas]
                            </option>";
                        }
                    }
                    echo "</select><br><br>";
                    echo "
                    <label for='modulo3' id='modulo3'>Modulo 3: </label>
                    <select name='modulo3'>";
                    foreach ($listaModulo3 as $modulo3){
                        if ($usuario["modulo3"]==$modulo3["id_modulo"]) {
                            echo "<option value='$modulo3[id_modulo]' selected>
                                $modulo3[siglas]
                            </option>";
                        }else{
                            echo "<option value='$modulo3[id_modulo]'>
                                $modulo3[siglas]
                            </option>";
                        }
                    }
                    echo "</select><br><br>";
                    echo "
                    <label for='alumno' id='alumno'>Alumno: </label>
                    <select name='alumno'>";
                    foreach ($listaAlumnos as $alumno){
                        if ($usuario["alumno"]==$alumno["id_alumno"]) {
                            echo "<option value='$alumno[id_alumno]' selected>
                                $alumno[nombre]
                            </option>";
                        }else{
                            echo "<option value='$alumno[id_alumno]'>
                                $alumno[nombre]
                            </option>";
                        }
                    }
                    echo "</select><br><br>";
                    echo "
                    <label for='tutor' id='tutor'>Tutor: </label>
                    <select name='tutor'>";
                    foreach ($listaTutores as $tutores){
                        if ($usuario["tutor"]==$tutores["id_tutor"]) {
                            echo "<option value='$tutores[id_tutor]' selected>
                                $tutores[nombre]
                            </option>";
                        }else{
                            echo "<option value='$tutores[id_tutor]'>
                                $tutores[nombre]
                            </option>";
                        }
                    }
                    echo "</select><br><br>";
                    echo "<input type='submit' value='Enviar' id='enviar'><br>";
                } else {
                    echo "Error de visualización";
                }
                $conexion=null;
                
            ?>
            
        </form>
    </main>
    <footer>
        <h4>Miguel Fernández</h4>
    </footer>
</body>
</html>