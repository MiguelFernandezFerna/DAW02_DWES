<?php
require_once "../modelo/Producto.php";
session_start();

// Cargar carrito desde la cookie si existe
if (!isset($_SESSION["carrito"]) && isset($_COOKIE["carrito"])) {
    $_SESSION["carrito"] = unserialize($_COOKIE["carrito"]);
}

$productos = [
    new Producto("Proteína", 40),
    new Producto("Creatina", 50),
    new Producto("Trembolona Acetato", 80)
];

if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = [];
}

// Guardar el carrito en cookies
function guardarCarritoEnCookies() {
    setcookie("carrito", serialize($_SESSION["carrito"]), time() + 3600, "/"); // Expira en 1 hora
}

// Agregar productos al carrito
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["agregar"])) {
    $indice = $_POST["indice"];
    $productoNuevo = $productos[$indice];
    
    $encontrado = false;
    foreach ($_SESSION["carrito"] as &$item) {
        if ($item->getNombre() === $productoNuevo->getNombre()) {
            $item->setCantidad($item->getCantidad() + 1);
            $encontrado = true;
            break;
        }
    }
    
    if (!$encontrado) {
        $_SESSION["carrito"][] = $productoNuevo;
    }

    guardarCarritoEnCookies(); // Actualizamos la cookie
    header('Location: ../vista/productos.php');
    exit;
}

// Eliminar todos los productos de un tipo del carrito
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar_tipo"])) {
    $indice = $_POST["indice"];
    if (isset($_SESSION["carrito"][$indice])) {
        unset($_SESSION["carrito"][$indice]);
        $_SESSION["carrito"] = array_values($_SESSION["carrito"]); // Reindexar el array
    }

    guardarCarritoEnCookies(); // Actualizamos la cookie
    header('Location: ../vista/carrito.php');
    exit;
}

// Eliminar un producto de un tipo del carrito
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar_uno"])) {
    $indice = $_POST["indice"];
    if (isset($_SESSION["carrito"][$indice])) {
        $cantidadActual = $_SESSION["carrito"][$indice]->getCantidad();
        if ($cantidadActual > 1) {
            $_SESSION["carrito"][$indice]->setCantidad($cantidadActual - 1);
        } else {
            unset($_SESSION["carrito"][$indice]);
            $_SESSION["carrito"] = array_values($_SESSION["carrito"]); // Reindexar el array
        }
    }

    guardarCarritoEnCookies(); // Actualizamos la cookie
    header('Location: ../vista/carrito.php');
    exit;
}

// Vaciar el carrito (simulación de pago o manualmente)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["vaciar_carrito"])) {
    unset($_SESSION["carrito"]);
    setcookie("carrito", "", time() - 3600, "/"); // Eliminar la cookie
    header('Location: ../vista/realizar_pago.php');
    exit;
}

function obtenerTotalCarrito() {
    $total = 0;
    if (isset($_SESSION["carrito"])) {
        foreach ($_SESSION["carrito"] as $item) {
            $total += $item->getPrecio() * $item->getCantidad();
        }
    }
    return $total;
}
