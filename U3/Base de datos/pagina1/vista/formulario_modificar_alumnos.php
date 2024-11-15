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
        <form action="../controlador/modificar_alumno.php" method="post">
            <?php
                include("../config/conexion.php");

                $conexion=conexion();
                $idRecogido = $_GET["id_alumno"];

                $cambiarAlumno = $conexion->prepare("select * from alumnos where id_alumno =?");
                $cambiarAlumno->bind_param("i",$idRecogido);
    
                //Ejecuto la consulta y si no hay error
                if ($cambiarAlumno->execute()) {
                //obtenemos solo una fila, que será la primera
                    $resultado = $cambiarAlumno->get_result();
                    $usuario = $resultado->fetch_assoc();
                    echo "<input type=hidden name=id_alumno value=$idRecogido>";
                    echo "
                    <label for=dni>DNI:</label>
                    <input type=text id=dni name=dni value=$usuario[dni]><br><br>";
                    echo "
                    <label for=nombre id=nombre>Nombre:</label>
                    <input type=text id=nombre name=nombre value=$usuario[nombre]><br><br>";
                    echo "
                    <label for='apellido1' id='apellido1'>Apellido 1:</label>
                    <input type='text' id='apellido1' name='apellido1' value=$usuario[apellido1]><br><br>";
                    echo "
                    <label for='apellido2' id='apellido2'>Apellido 2:</label>
                    <input type='text' id='apellido2' name='apellido2' value=$usuario[apellido2]><br><br>";
                    echo "
                    <label for='email' id='email'>Email:</label>
                    <input type='text' id='email' name='email' value=$usuario[email]><br><br>";
                    echo "
                    <label for=telefono>Telefono:</label>
                    <input type=text name=telefono id=telefono value=$usuario[telefono]><br><br>";
                    echo "
                    <label for=curso>Curso:</label>
                    <input type=text id=curso name=curso value=$usuario[curso]><br><br>";
                    echo "<input type='submit' value=Enviar id=enviar><br>";
                } else {
                    echo "Error de visualización";
                }

                $resultado->close();
                $conexion->close();
                
            ?>
            
        </form>
    </main>
    <footer>
        <h4>Miguel Fernández</h4>
    </footer>
</body>
</html>