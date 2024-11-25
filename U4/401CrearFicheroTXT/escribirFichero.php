<?php
    include("conexion.php");
    $conectar = conexion();
    
    $archivo = "escribirYleer.txt";
    //si queremos añadir texto, debe abrirse a+
    //$fp = fopen($archivo, "a+");
    $fp = fopen($archivo,"w");
    $texto="";
    try {
        $consulta = "select * from alumnos";
        $resultado = $conectar->query($consulta);
        $resultado -> setFetchMode(PDO::FETCH_ASSOC);
        $resultado -> execute();

        $listaAlumnos = $resultado->fetchAll();
        foreach ($listaAlumnos as $alumno) {
            $texto.="DNI: $alumno[dni], Nombre: $alumno[nombre], Apellido 1: $alumno[apellido1], Apellido 2: $alumno[apellido2], Email: $alumno[email], Telefono: $alumno[telefono], Curso: $alumno[curso]<br><br>";
        }
        fwrite($fp, $texto);
        fclose($fp);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $fp = fopen($archivo,"r");
    $contenido = fread($fp,filesize($archivo));

    echo $contenido;

    fclose($fp);