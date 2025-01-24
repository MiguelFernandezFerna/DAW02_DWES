<?php
require_once '../modelo/Producto.php';
require_once '../controlador/controlador.php';

$mensaje = "";

// Verificamos si el carrito tiene productos
if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
    // Simulación de pago
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['realizar_pago'])) {
        // Vaciar el carrito tras el pago
        unset($_SESSION['carrito']);
        setcookie("carrito", "", time() - 3600, "/"); // Eliminar la cookie
        $mensaje = "Pago completado.";
    }

    // Opción para vaciar el carrito sin realizar el pago
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['vaciar_carrito'])) {
        unset($_SESSION['carrito']);
        setcookie("carrito", "", time() - 3600, "/"); // Eliminar la cookie
        $mensaje = "El carrito ha sido vaciado sin realizar el pago.";
    }
} else {
    $mensaje = "No hay productos en el carrito.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Pago de Productos</title>
</head>
<body>
    <h1>Realizar Pago</h1>
    <p><?= htmlspecialchars($mensaje); ?></p>

    <?php if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])): ?>
        <form action="realizar_pago.php" method="post">
            <input type="submit" name="vaciar_carrito" value="Vaciar carrito">
            <input type="submit" name="realizar_pago" value="Realizar Pago">
        </form>
    <?php else: ?>
        <p>El carrito está vacío. Por favor, añade productos antes de continuar.</p>
    <?php endif; ?>

    <p><a href="productos.php">Volver a la lista de productos</a></p>
</body>
</html>
