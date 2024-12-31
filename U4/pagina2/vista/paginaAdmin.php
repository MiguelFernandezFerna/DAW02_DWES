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
    <title>Página de administradores</title>
    <link rel="stylesheet" href="paginaAdminEstilo.css">
</head>
<body>
    <h1>Bienvenido a la zona de Administradores</h1>
<button id="Insertar"><a href="formulario_agregar_proyecto.php" id="insertar">Nuevo proyecto</a></button>
<button id="borrar"><a href="../controlador/logout.php">Cerrar sesión</a></button>
<h2>Listado total de proyectos:</h2>
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
            <th>Tutor</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <?php
                include("visualizarDatos.php");
                visualizarProyectos();
            ?>
        </tbody>
    </table>
    

    <h2 id="tutores">Listado de tutores total: </h2>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo electrónico</th>
            <th>Tipo de tutor</th>
            <th>Baja/alta Tutores</th>
            <th>Habilitar/Deshabilitar acceso tutores</th>
        </thead>
        <tbody>
            <?php
                visualizarTutores();
            ?>
        </tbody>
    </table>
    <h2 id="tutoresActivos">Listado de tutores activos: </h2>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo electrónico</th>
            <th>Tipo de tutor</th>
        </thead>
        <tbody>
            <?php
                visualizarTutoresActivos();
            ?>
        </tbody>
    </table>

    <div id="cajaAlumno">
    <h2 id="alumnos">Listado de alumnos:</h2>
    <button id="insertarAlumno"><a href="formulario_agregar_alumno.php" id="insertar">Nuevo alumno</a></button>
    </div>
    <table>
        <thead>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Curso</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <?php
                visualizarAlumnos();
            ?>
        </tbody>
    </table>
</body>
</html>