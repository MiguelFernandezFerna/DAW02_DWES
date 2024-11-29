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
        <h1>Procederemos a modificar un usuario:</h1>
    </header>
    <main>
        <form action="../controlador/modificar.php" method="post">
            <?php
                include("../config/conexion.php");

                $conexion=conexion();
                $idTarea = $_GET["id_tarea"];

                $cambiarTarea = $conexion->prepare("select * from tareas where id_tarea =:id_tarea");
                $cambiarTarea->bindParam(':id_tarea', $idTarea, PDO::PARAM_INT);
    
                //Ejecuto la consulta y si no hay error
                if ($cambiarTarea->execute()) {
                //obtenemos solo una fila, que será la primera
                    $usuario = $cambiarTarea->fetch();
                    echo "<input type=hidden name=id_proyecto value=$idTarea>";
                    echo "
                    <label for=descripcion id=descripcion>Descripción:</label>
                    <input type=text id=descripcion name=descripcion value=$usuario[descripcion]><br><br>";
                    echo "
                    <label for='realizada' id='realizada'>Realizada:</label>
                    <input type='text' id='realizada' name='realizada' value=$usuario[realizada]><br><br>";
                    
                    echo "<input type='submit' value=Enviar id=enviar><br>";
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