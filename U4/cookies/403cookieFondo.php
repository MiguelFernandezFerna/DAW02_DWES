<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style>
        <?php
        // Si la cookie 'color' está configurada, aplicamos el tema correspondiente.
        if (isset($_COOKIE['color'])) {
            if ($_COOKIE['color'] == 'Oscuro') {
                echo 'body { background-color: #333; color: white; }';
            } else if($_COOKIE['color']=='Claro'){
                echo 'body { background-color: grey; color: lightblue }';
            }
        }else{
            echo 'body { background-color: white; color: black }';
        }
        ?>
    </style>
</head>
<body>
    <h1>Pagina 1 con cookies</h1>
    <div id="caja">
        <form action="" method="POST">
            <label for="pregunta">¿Quiere visualizar la página en modo oscuro o en modo claro?</label>
            <br><br>
            <!-- Enviar 'Claro' o 'Oscuro' al formulario -->
            <input type="submit" value="Claro" name="color" id="claro">
            <input type="submit" value="Oscuro" name="color" id="oscuro">
            <input type=submit value="Borrar" name="color">
        </form>
    </div>

    <?php
        // Verificar si el formulario fue enviado y aplicar la cookie correspondiente
        if (isset($_POST['color'])) {
            if ($_POST["color"]=="Borrar") {
                setcookie('color', "", time() - (2 * 24 * 60 * 60), '/');
                header("Location: " . $_SERVER['PHP_SELF']);
            }else{
                $colorSeleccionado = $_POST['color'];
                setcookie('color', $colorSeleccionado, time() + (2 * 24 * 60 * 60), '/');
                header("Location: " . $_SERVER['PHP_SELF']);
            }
            
        }
    ?>
</body>
</html>
