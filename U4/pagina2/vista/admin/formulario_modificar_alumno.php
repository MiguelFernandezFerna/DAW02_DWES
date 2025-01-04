<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar alumno</title>
    <link rel="stylesheet" href="../estiloFormularios.css">
</head>
<body>
    <header>
        <h1>Procederemos a modificar un proyecto:</h1>
    </header>
    <main>
        <form action="../../controlador/admin/modificarAlumno.php" method="post">
            <?php
                include("../../config/conexion.php");

                $conexion=conexion();
                $idAlumno = $_GET["id_alumno"];

                $cambiarAlumno = $conexion->prepare("select * from alumnos where id_alumno =:id_alumno");
                $cambiarAlumno->bindParam(':id_alumno', $idAlumno, PDO::PARAM_INT);
    
                //Ejecuto la consulta y si no hay error
                if ($cambiarAlumno->execute()) {
                //obtenemos solo una fila, que será la primera
                    $alumno = $cambiarAlumno->fetch();
                    echo "<input type=hidden name=id_alumno value=$idAlumno>";
                    echo "
                    <label for='nombre' id='nombre'>Nombre:</label>
                    <input type=text id='nombre' name='nombre' value='$alumno[nombre]'><br><br>";
                    echo "
                    <label for='apellido1' id='apellido1'>Primer apellido: </label>
                    <input type='text' id='apellido1' name='apellido1' value=$alumno[apellido1]><br><br>";
                    echo "
                    <label for='apellido2' id='apellido2'>Segundo apellido: </label>
                    <input type='text' id='apellido2' name='apellido2' value=$alumno[apellido2]><br><br>";
                    echo "
                    <label for='email' id='email'>Email: </label>
                    <input type='text' id='email' name='email' value=$alumno[email]><br><br>";
                    echo "
                    <label for='telefono' id='telefono'>Teléfono: </label>
                    <input type='text' name='telefono' id='telefono' value='$alumno[telefono]'><br><br>";
                    echo "
                    <label for='curso' id='curso'>Curso: </label>
                    <input type='text' id='curso' name='curso' value='$alumno[curso]'><br><br>";
                    
                    echo "<input type='submit' value='Enviar' id='enviar'><br>";
                    echo "<button><a href='paginaAdmin.php'>Cancelar</a></button>";
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