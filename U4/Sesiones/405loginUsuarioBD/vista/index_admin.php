<?php
//Si no hay sesion la inicia
    if (!$_SESSION) {
        session_start();
    }
//si no tiene sesión te devuelve a la index
    if (!isset($_SESSION['usuario'])) {
        header("Location: index.php?loginEnIndex=true");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de los 1</title>
</head>
<body>
    <h1>Bienvenido <?= $_SESSION['usuario']?></h1>

    <h2>Listado de productos</h2>
    <ul>
        <li>Producto 1</li>
        <li>Producto 2</li>
        <li>Producto 3</li>
    </ul>
    <p>Pulse <a href="../controlador/logout.php">aquí</a></p>
</body>
</html>