<?php
        $nombre = $_GET["nombre"];
        $apellido1 = $_GET["apellido1"];
        $apellido2 = $_GET["apellido2"];
        $email = $_GET["mail"];
        $año_nac = $_GET["añoNac"];
        $telefono = $_GET["telefono"];
         echo 
         "<table border='solid' cellspacing='0'>
            <tr>
                <th>Nombre</th>
                <th>Primer apellido</th>
                <th>Segundo apellido</th>
                <th>Email</th>
                <th>Año</th>
                <th>Teléfono</th>
            </tr>
            <tr>
                <td>$nombre</td>
                <td>$apellido1</td>
                <td>$apellido2</td>
                <td>$email</td>
                <td>$año_nac</td>
                <td>$telefono</td>
            </tr>
         </table>";
    ?>  