<?php
    require_once '../controlador/controlador.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Productos: </h1>
    <ul>
        <?php foreach ($productos as $indice => $producto) {?>
            <li>
                <?= $producto->getNombre()?> - <?= $producto->getPrecio()?>&euro;
                <form action="../controlador/controlador.php" method="post">
                    <input type="hidden" name="indice" value="<?= $indice?>">
                    <input type="submit" value="Agregar al carrito" name="agregar">
                </form>
            </li>
        <?php }?>
    </ul>
    <p><a href="carrito.php">Ver carrito</a></p>
</body>
</html>