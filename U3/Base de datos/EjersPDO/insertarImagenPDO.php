<?php
    include("conexionProyectoPDO.php");
    $conectar = conexion();

    try {
        $sql = "insert into proyecto (titulo, logotipo) values (:titulo, :logotipo)";

        $sentencia = $conectar->prepare($sql);

        $titulo="ComidaSana5";
        $logotipo=file_get_contents("https://www.pequerecetas.com/wp-content/uploads/2024/10/chorrillana-receta-chilena-800x600.jpg");

        $sentencia->bindParam(':titulo',  $titulo,PDO::PARAM_STR);
        $sentencia->bindParam(":logotipo", $logotipo, PDO::PARAM_LOB);

        $sentencia->execute();
        if ($sentencia) {
            echo "Datos insertados";
            echo "La imagen es: <br>";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }