<?php
//Si no hay sesion la inicia
    session_start();
//si no tiene sesión te devuelve a la index
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../inicioSesion.php?loginEnIndex=true");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="paginaAdminEstilo.css">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Bienvenido a la zona de Administradores</h1>
    <button id="borrar"><a href="../../controlador/logout.php">Cerrar sesión</a></button>
    <button id="volver"><a href="paginaAdmin.php">Volver</a></button>
</header>
<h2>Mis proyectos: </h2>
<table>
        <thead>
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
            <th>Modificar</th>
            <th>Completar</th>
        </thead>
        <tbody>
            <?php
                include("visualizarDatosAdmin.php");
                cogerUsuarioTutorSinCompletar($_SESSION['usuario']);
            ?>
        </tbody>
    </table>
    <h2>Alumnos de mis proyectos: </h2>
    <table>
        <thead>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Curso</th>
        </thead>
        <tbody>
            <?php
                visualizarAlumnosPorTutor($_SESSION['usuario']);
            ?>
        </tbody>
    </table>
</body>
</html>