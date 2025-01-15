<?php
require_once '../modelo/Producto.php';
require_once '../controlador/controlador.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de la compra</title>
</head>
<body>
    <?php
    if (empty($_SESSION['carrito'])) {
        echo "<p>El carrito está vacío</p>";
    } else {
        echo "<h1>Carrito de productos: </h1>";
        echo "<ul>";
        foreach ($_SESSION['carrito'] as $producto) {
            if ($producto instanceof Producto) {
                echo "<li>{$producto->getNombre()} - {$producto->getPrecio()}&euro;</li>";
            } else {
                // Si por alguna razón el producto es un string, lo mostramos tal cual
                echo "<li>$producto</li>";
            }
        }
        echo "</ul>";
        echo "<p><a href='realizar_pago.php'>Comprar</a></p>";
    }
    ?>
    <p><a href="productos.php">Volver a la lista de productos</a></p>
</body>
</html>