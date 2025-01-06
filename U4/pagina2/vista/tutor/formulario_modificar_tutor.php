<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de <?= $_SESSION['usuario']?></title>
    <link rel="stylesheet" href="../estiloFormularios.css">
</head>
<body>
    <header>
        <h1>Página de perfil</h1>
        <button id="borrar"><a href="../../controlador/logout.php">Cerrar sesión</a></button>
    </header>
    <main>
        <form action="../../controlador/tutor/modificarTutor.php" method="post">
            <?php
                include("../../config/conexion.php");

                $conexion=conexion();
                $loginTutor = $_GET["login"];

                $cambiarTutor = $conexion->prepare("select * from tutor where login =:login");
                $cambiarTutor->bindParam(':login', $loginTutor, PDO::PARAM_STR);
    
                //Ejecuto la consulta y si no hay error
                if ($cambiarTutor->execute()) {
                //obtenemos solo una fila, que será la primera
                    $tutor = $cambiarTutor->fetch();
                    $idTutor = $tutor["id_tutor"];
                    echo "<input type=hidden name=id_tutor value=$idTutor>";
                    echo "
                    <label for='login' id='login'>Nombre de usuario:</label>
                    <input type=text id='login' name='login' value='$tutor[login]'><br><br>";
                    echo "
                    <label for='correo' id='correo'>Correo: </label>
                    <input type='text' id='correo' name='correo' value=$tutor[correo]><br><br>";
                    echo "
                    <label for='nombre' id='nombre'>Nombre: </label>
                    <input type='text' id='nombre' name='nombre' value=$tutor[nombre]><br><br>";
                    echo "
                    <label for='apellidos' id='apellidos'>Apellidos: </label>
                    <input type='text' id='apellidos' name='apellidos' value=$tutor[apellidos]><br><br>";
                    
                    echo "<input type='submit' value='Enviar' id='enviar'><br>";
                    echo "<button><a href='paginaTutor.php'>Cancelar</a></button>";
                } else {
                    echo "Error de visualización";
                }
                $conexion=null;
                
            ?>
            
        </form>
    </main>
</body>
</html>