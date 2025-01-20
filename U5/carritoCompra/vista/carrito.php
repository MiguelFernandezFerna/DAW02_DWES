<?php
require_once '../controlador/controlador.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    <?php if (empty($_SESSION["carrito"])): ?>
        <p>El carrito está vacío</p>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION["carrito"] as $indice => $item): ?>
                <li>
                    <?php echo $item->getNombre(); ?> - 
                    Cantidad: <?php echo $item->getCantidad(); ?> - 
                    Precio unitario: <?php echo $item->getPrecio(); ?>€ - 
                    Subtotal: <?php echo $item->getPrecio() * $item->getCantidad(); ?>€
                    <form action="../controlador/controlador.php" method="post" style="display: inline;">
                        <input type="hidden" name="indice" value="<?= $indice ?>">
                        <input type="submit" name="eliminar_tipo" value="Eliminar todos">
                    </form>
                    <form action="../controlador/controlador.php" method="post" style="display: inline;">
                        <input type="hidden" name="indice" value="<?= $indice ?>">
                        <input type="submit" name="eliminar_uno" value="Eliminar uno">
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <p>Total del carrito: <?php echo obtenerTotalCarrito(); ?>€</p>
    <?php endif; ?>

    <p><a href="productos.php">Volver a la lista de productos</a></p>
    <p><a href="realizar_pago.php">Realizar Pago</a></p>
</body>
</html>
