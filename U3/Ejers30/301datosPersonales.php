<?php
    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }

    $directorioSubida = "subidos/";

    if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = filtrado($_POST["nombre"]);
        $apellido1 = filtrado($_POST["apellido1"]);
        $apellido2 = filtrado($_POST["apellido2"]);
        $dni = filtrado($_POST["dni"]);
        $email = filtrado($_POST["email"]);
        $fechaNac = filtrado($_POST["fecha"]);
        $telefono = filtrado($_POST["telefono"]);
        $sexo = filtrado($_POST["sexo"]);
        $estudios = filtrado($_POST["estudios"]);
        // Utilizamos implode para pasar el array a string
        $idiomas = filtrado(implode(", ", $_POST["idiomas"]));
        $nombreArchivo = $_FILES['foto']['name'];
        $nombreCompleto = $directorioSubida.$nombreArchivo;
        $nombreFormulario = $_FILES['curriculum']['name'];
        $nombreCompletoForm = $directorioSubida.$nombreFormulario;
    }

    echo "Nombre: $nombre <br>";
    echo "Primer apellido: $apellido1 <br>";
    echo "Segundo apellido: $apellido2 <br>";
    echo "DNI: $dni <br>";
    echo "Email: $email <br>";
    echo "Fecha de nacimiento: $fechaNac <br>";
    echo "Teléfono: $telefono <br>";
    echo "Sexo: $sexo <br>";
    echo "Estudios: $estudios <br>";
    echo "Idiomas: $idiomas <br>";
    echo "Imagen: <br><br>";
    echo "<img src=".$nombreCompleto."> <br><br>";
    echo "Formulario: <br><br>";
    echo " <iframe src=".$nombreCompletoForm.">Descargar</iframe>";


    

    

    

    

    

    

    
