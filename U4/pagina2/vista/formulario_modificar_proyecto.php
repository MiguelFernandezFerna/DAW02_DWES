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
        <h1>Procederemos a modificar un usuario nuevo:</h1>
    </header>
    <main>
        <form action="../controlador/modificar.php" method="post">
            <?php
                include("../config/conexion.php");

                $conexion=conexion();
                $idProyecto = $_GET["id_proyecto"];

                $cambiarProyecto = $conexion->prepare("select * from proyecto where id_proyecto =:id_proyecto");
                $cambiarProyecto->bindParam(':id_proyecto', $idProyecto, PDO::PARAM_INT);
    
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
                    <input type='text' id='modulo1' name='modulo1' value='$usuario[modulo1]'><br><br>";
                    echo "
                    <label for='modulo2' id='modulo2'>Modulo 2: </label>
                    <input type='text' id='modulo2' name='modulo2' value='$usuario[modulo2]'><br><br>";
                    echo "
                    <label for='modulo3' id='modulo3'>Modulo 3: </label>
                    <input type='text' id='modulo3' name='modulo3' value='$usuario[modulo3]'><br><br>";
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