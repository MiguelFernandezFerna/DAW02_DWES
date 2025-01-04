<?php
    include_once("../../config/conexion.php");
    include("../../config/fpdf/fpdf.php");

    function meterModulos($id,$con){
        $sql = "select siglas from modulos where id_modulo = :id";
    
        try{
            $stmt = $con -> prepare($sql);
            $stmt -> setFetchMode(PDO::FETCH_OBJ);
            $stmt -> bindValue(":id",$id,PDO::PARAM_INT);
            $stmt -> execute();
    
            $modulo = $stmt -> fetch();
            if($modulo -> siglas != ""){
                return $modulo -> siglas;
            }else{
                return "";
            }
    
        }catch(PDOException $e){
            echo $e -> getMessage();
        }
    }

function pdf_conversion($con, $pdf, $datos){
    $direccion = "../pdf/";
    $archivoSubido = $direccion . basename($pdf["pdf_proyecto"]["name"]);

    if (move_uploaded_file($pdf["pdf_proyecto"]["tmp_name"], $archivoSubido)) {
        $sql = "select nombre, apellido1, apellido2 from alumnos where id_alumno =:id_alumno";

        try {
            $sentencia = $con ->prepare($sql);

            $sentencia ->bindParam(':id_alumno',$datos["alumno"],PDO::PARAM_INT);
            $sentencia ->setFetchMode(PDO::FETCH_OBJ);
            $sentencia ->execute();

            $alumno = $sentencia ->fetch();

            $nombreArchivo = $alumno -> nombre."_".$alumno->apellido1."_".$alumno->apellido2."_".$datos["titulo"]. ".pdf";
            rename($archivoSubido,$direccion.$nombreArchivo);
            $archivo = $direccion.$nombreArchivo;
            $con = null;

            return $archivo;
        } catch (PDOException $e) {
            echo $e -> getMessage();
        }
    } else {
        echo "Ha ocurrido un error al subir el archivo";
        return " ";
    }
}

function visualizarAlumnosPorTutor($sesion){
    $conectar = conexion();

    $consulta = "select p.alumno, p.tutor, a.*, t.id_tutor from proyecto p left outer join alumnos a on p.alumno=a.id_alumno left outer join tutor t on p.tutor = t.id_tutor where t.login = :login";
    $sentencia = $conectar -> prepare($consulta);
    $sentencia ->bindParam(':login', $sesion, PDO::PARAM_STR);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();

    $listaAlumnos = $sentencia -> fetchAll();

    foreach ($listaAlumnos as $alumno) {
        echo "<tr>";
            echo "<td>$alumno[dni]</td>";
            echo "<td>$alumno[nombre]</td>";
            echo "<td>$alumno[apellido1]</td>";
            echo "<td>$alumno[apellido2]</td>";
            echo "<td>$alumno[email]</td>";
            echo "<td>$alumno[telefono]</td>";
            echo "<td>$alumno[curso]</td>";
        echo "</tr>";
    }
}

function cogerUsuarioTutorSinCompletar($sesion){
    $conectar = conexion();

    $consulta = "select p.*, a.nombre as nomAlum, t.nombre as nomTutor, t.login as login from proyecto p left outer join alumnos a on p.alumno = a.id_alumno left outer join tutor t on p.tutor = t.id_tutor where login = :login;";
    $sentencia = $conectar -> prepare($consulta);
    $sentencia ->bindParam(':login', $sesion, PDO::PARAM_STR);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();

    $listaProyecto = $sentencia -> fetchAll();
    foreach ($listaProyecto as $proyecto) {
        if ($proyecto["completado"]==0) {
            echo "<tr>";
            echo "<td>$proyecto[titulo]</td>";
            echo "<td>$proyecto[curso]</td>";
            echo "<td>$proyecto[periodo]</td>";
            echo "<td>$proyecto[descripcion]</td>";
            echo "<td>$proyecto[fecha_presentacion]</td>";
            echo "<td>$proyecto[nota]</td>";
            $logotipo = $proyecto["logotipo"];
            echo "<td><img class='logotipo' src='data:image/png;base64," . base64_encode($logotipo) . "' alt='imagen'width = 50px height = 50px/></td>";;
            echo "<td><button><a href='$proyecto[pdf_proyecto]'>Descargar</a></button></td>";
            echo "<td>".meterModulos($proyecto["modulo1"],$conectar)."</td>";
            echo "<td>".meterModulos($proyecto["modulo2"],$conectar)."</td>";
            echo "<td>".meterModulos($proyecto["modulo3"],$conectar)."</td>";
            echo "<td>$proyecto[nomAlum]</td>";
            echo "<td><button><a href='formulario_modificar_proyecto_tutor.php?id_proyecto=$proyecto[id_proyecto]'>Modificar</a></button></td>";
            echo "<td><button><a href='../../controlador/tutor/completarTutor.php?id_proyecto=$proyecto[id_proyecto]'>Completar</a></button></td>";
            echo "</tr>";
        }
    }
$conectar=null;
}
