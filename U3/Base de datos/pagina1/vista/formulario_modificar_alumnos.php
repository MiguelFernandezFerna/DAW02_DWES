<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar usuario</title>
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
                $idRecogido = 3;//$_GET["id_alumno"];

                $cambiarAlumno = $conexion->prepare("select * from alumnos where id_alumno =?");
                $cambiarAlumno->bind_param("i",$idRecogido);
    
                //Ejecuto la consulta y si no hay error
                if ($cambiarAlumno->execute()) {
                //obtenemos solo una fila, que será la primera
                    $resultado = $cambiarAlumno->get_result();
                    $usuario = $resultado->fetch_assoc();
                    echo "
                    <label for=dni>DNI:</label>
                    <input type=text id=dni name=dni value=$usuario[dni]><br>";
                    echo "$usuario[nombre]<br>";
                    echo "$usuario[apellido1]
                        <br>$usuario[apellido2]<br>";
                    echo "$usuario[email]<br>";
                    echo "$usuario[telefono]<br>";
                    echo "$usuario[curso]<br>";
                } else {
                    echo "Error de visualización";
                }

                $resultado->close();
                $conexion->close();
                
            ?>
            

            <label for='nombre' id='nombre'>Nombre:</label>
            <input type='text' id='nombre' name='nombre' value="Miguel"><br>
    
            <label for='apellido1' id='apellido1'>Apellido 1:</label>
            <input type='text' id='apellido1' name='apellido1'><br>

            <label for='apellido2' id='apellido2'>Apellido 2:</label>
            <input type='text' id='apellido2' name='apellido2'><br>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email"><br>
    
            <label for='telefono' id='telefono'>Telefono:</label>
            <input type='text' id='telefono' name='telefono'><br>

            <label for="curso">Curso:</label>
            <input type="text" id="curso" name="curso"><br>
    
            <input type='submit' value="Enviar"><br>
        </form>
    </main>
    <footer>
        <h4>Miguel Fernández</h4>
    </footer>
</body>
</html>