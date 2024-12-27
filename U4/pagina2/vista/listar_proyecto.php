<?php
//Si no hay sesion la inicia
    session_start();
//si no tiene sesión te devuelve a la index
    if (!isset($_SESSION['usuario'])) {
        header("Location: inicioSesion.php?loginEnIndex=true");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD CON PDO</title>
    <link rel="stylesheet" href="pagina2Estilo.css">
</head>
<body>
<button id="Insertar"><a href="formulario_agregar_proyecto.php" id="insertar">Insertar</a></button>
    <table>
        <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Periodo</th>
            <th>Curso</th>
            <th>Fecha_presentacion</th>
            <th>Nota</th>
            <th>Logotipo</th>
            <th>PDF_Proyecto</th>
            <th>Modulo 1</th>
            <th>Modulo 2</th>
            <th>Modulo 3</th>
            <th>Alumno</th>
            <th>Tutor</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <?php
                include("visualizarProyectos.php");
                visualizarDatos();
            ?>
        </tbody>
    </table>
    <button id="borrar"><a href="../controlador/logout.php">Cerrar sesión</a></button>
</body>
</html>