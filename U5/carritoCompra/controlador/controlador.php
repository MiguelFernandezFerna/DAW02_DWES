<?php
session_start();

require_once "../modelo/Producto.php";

$productos = [
    new Producto("Proteína", 40),
    new Producto("Creatina", 50),
    new Producto("Trembolona Acetato", 80)
];

if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = [];
}

//agregamos productos al carrito si se envia el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["agregar"])) {
    $indice = $_POST["indice"];
    // Aseguramos que estamos guardando un objeto Producto
    $_SESSION["carrito"][] = $productos[$indice];
    //redirigimos a la lista de productos
    header('Location: ../vista/productos.php');
    exit;
}