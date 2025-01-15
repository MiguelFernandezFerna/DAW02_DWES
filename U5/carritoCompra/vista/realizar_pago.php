<?php
require_once '../modelo/Producto.php';
require_once '../controlador/controlador.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Pago de Productos</title>
</head>
<body>
    <?php
    // Verificamos si el carrito tiene productos
    if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
        
        // Simulación de pago
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['realizar_pago'])) {
            // Vaciar el carrito tras el pago
            unset($_SESSION['carrito']);
            echo "<p>Pago completado. El carrito ha sido vaciado.</p>";
        }

        // Opción para vaciar el carrito sin realizar el pago
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['vaciar_carrito'])) {
            unset($_SESSION['carrito']);
            echo "<p>El carrito ha sido vaciado.</p>";
        }
    } else {
        echo "<p>No hay productos en el carrito para realizar esta acción.</p>";
    }
    ?>

    <!-- Botón para vaciar el carrito sin realizar el pago -->
    <form action="realizar_pago.php" method="post">
        <input type="submit" name="vaciar_carrito" value="Vaciar carrito">
        <input type="submit" name="realizar_pago" value="Realizar Pago">
    </form>

    <p><a href="productos.php">Volver a la lista de productos</a></p>
</body>
</html>
