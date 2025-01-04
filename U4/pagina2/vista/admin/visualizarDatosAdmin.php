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

    function visualizarProyectos(){
        $conectar = conexion();

        $consulta = "select p.*, a.nombre as nomAlum, t.nombre as nomTutor from proyecto p left outer join alumnos a on p.alumno = a.id_alumno left outer join tutor t on p.tutor = t.id_tutor;";
        $sentencia = $conectar -> prepare($consulta);
        $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
        $sentencia -> execute();
    
        $listaProyecto = $sentencia -> fetchAll();
        foreach ($listaProyecto as $proyecto) {
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
            echo "<td>$proyecto[nomTutor]</td>";
            echo "<td><button><a href='formulario_modificar_proyecto.php?id_proyecto=$proyecto[id_proyecto]'>Modificar</a></button></td>";
            if ($proyecto["completado"]==0) {
                echo "<td><button><a href='../../controlador/admin/completarAdmin.php?id_proyecto=$proyecto[id_proyecto]'>Completar</a></button></td>";
            } else {
                echo "<td><button><a href='../../controlador/deshacerCompletar.php?id_proyecto=$proyecto[id_proyecto]'>Deshacer</a></button></td>";
            }
            echo "<td><button><a href='../../controlador/eliminar.php?id_proyecto=$proyecto[id_proyecto]'>Eliminar</a></button></td>";
            echo "</tr>";
        }
    $conectar=null;
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

function visualizarTutores(){
    $conectar = conexion();

    $consulta = "select * from tutor";
    $sentencia = $conectar -> prepare($consulta);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();

    $listaTutores = $sentencia -> fetchAll();
    foreach ($listaTutores as $tutores) {
        echo "<tr>";
        echo "<td>$tutores[nombre]</td>";
        echo "<td>$tutores[apellidos]</td>";
        echo "<td>$tutores[correo]</td>";
        if ($tutores["tipo_usu"] == 1) {
            echo "<td>Administrador y Tutor</td>";
        } else {
            echo "<td>Tutor</td>";
        }
        if ($tutores["baja"]==0) {
            echo "<td><button><a href='../../controlador/admin/Baja.php?id_tutor=$tutores[id_tutor]'>Baja</a></button></td>";
        } else {
            echo "<td><button><a href='../../controlador/admin/Alta.php?id_tutor=$tutores[id_tutor]'>Alta</a></button></td>";
        }
        
        if ($tutores["activar"]==0) {
            echo "<td><button><a href='../../controlador/admin/Habilitar.php?id_tutor=$tutores[id_tutor]'>Habilitar</a></button></td>";
        } else {
            echo "<td><button><a href='../../controlador/admin/Deshabilitar.php?id_tutor=$tutores[id_tutor]'>Deshabilitar</a></button></td>";
        }
        
        echo "</tr>";
    }
$conectar=null;
}
function visualizarTutoresActivos(){
    $conectar = conexion();
    $baja = 0;

    $consulta = "select * from tutor where baja = :baja";
    $sentencia = $conectar -> prepare($consulta);
    $sentencia -> bindParam(':baja', $baja,PDO::PARAM_STR);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();

    $listaTutores = $sentencia -> fetchAll();
    foreach ($listaTutores as $tutores) {
        echo "<tr>";
        echo "<td>$tutores[nombre]</td>";
        echo "<td>$tutores[apellidos]</td>";
        echo "<td>$tutores[correo]</td>";
        if ($tutores["tipo_usu"] == 1) {
            echo "<td>Administrador y Tutor</td>";
        } else {
            echo "<td>Tutor</td>";
        }
        echo "</tr>";
    }
$conectar=null;
}

function visualizarAlumnos(){
    $conectar = conexion();

    $consulta = "select * from alumnos";
    $sentencia = $conectar -> prepare($consulta);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();

    $listaAlumnos = $sentencia ->fetchAll();

    foreach ($listaAlumnos as $alumno) {
        echo "<tr>";
            echo "<td>$alumno[dni]</td>";
            echo "<td>$alumno[nombre]</td>";
            echo "<td>$alumno[apellido1]</td>";
            echo "<td>$alumno[apellido2]</td>";
            echo "<td>$alumno[email]</td>";
            echo "<td>$alumno[telefono]</td>";
            echo "<td>$alumno[curso]</td>";
            echo "<td><button><a href='formulario_modificar_alumno.php?id_alumno=$alumno[id_alumno]'>Modificar</a></button></td>";
        echo "</tr>";
    }
}

function cogerUsuarioTutor($sesion){
    $conectar = conexion();

    $consulta = "select p.*, a.nombre as nomAlum, t.nombre as nomTutor, t.login as login from proyecto p left outer join alumnos a on p.alumno = a.id_alumno left outer join tutor t on p.tutor = t.id_tutor where login = :login;";
    $sentencia = $conectar -> prepare($consulta);
    $sentencia ->bindParam(':login', $sesion, PDO::PARAM_STR);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();

    $listaProyecto = $sentencia -> fetchAll();
    foreach ($listaProyecto as $proyecto) {
            echo "<tr>";
            echo "<td>$proyecto[titulo]</td>";
            echo "<td>$proyecto[curso]</td>";
            echo "<td>$proyecto[periodo]</td>";
            echo "<td>$proyecto[descripcion]</td>";
            echo "<td>$proyecto[fecha_presentacion]</td>";
            echo "<td>$proyecto[nota]</td>";
            $logotipo = $proyecto["logotipo"];
            echo "<td><img class='logotipo' src='data:image/png;base64," . base64_encode($logotipo) . "' alt='imagen'width = 50px height = 50px/></td>";;
            echo "<td>$proyecto[pdf_proyecto]</td>";
            echo "<td>".meterModulos($proyecto["modulo1"],$conectar)."</td>";
            echo "<td>".meterModulos($proyecto["modulo2"],$conectar)."</td>";
            echo "<td>".meterModulos($proyecto["modulo3"],$conectar)."</td>";
            echo "<td>$proyecto[nomAlum]</td>";
            echo "<td><button><a href='formulario_modificar_proyecto_tutor.php?id_proyecto=$proyecto[id_proyecto]'>Modificar</a></button></td>";
            echo "<td><button><a href='../controlador/eliminar.php?id_proyecto=$proyecto[id_proyecto]'>Eliminar</a></button></td>";
            echo "</tr>";
    }
$conectar=null;
}

function visualizarProyectosPorTutor(){
    $conectar = conexion();

    $consulta = "select p.*, a.nombre as nomAlum, t.nombre as nomTutor from proyecto p left outer join alumnos a on p.alumno = a.id_alumno left outer join tutor t on p.tutor = t.id_tutor;";
    $sentencia = $conectar -> prepare($consulta);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();

    $listaProyecto = $sentencia -> fetchAll();
    foreach ($listaProyecto as $proyecto) {
            echo "<tr>";
            echo "<td>$proyecto[titulo]</td>";
            echo "<td>$proyecto[curso]</td>";
            echo "<td>$proyecto[periodo]</td>";
            echo "<td>$proyecto[descripcion]</td>";
            echo "<td>$proyecto[fecha_presentacion]</td>";
            echo "<td>$proyecto[nota]</td>";
            $logotipo = $proyecto["logotipo"];
            echo "<td><img class='logotipo' src='data:image/png;base64," . base64_encode($logotipo) . "' alt='imagen'width = 50px height = 50px/></td>";;
            echo "<td>$proyecto[pdf_proyecto]</td>";
            echo "<td>".meterModulos($proyecto["modulo1"],$conectar)."</td>";
            echo "<td>".meterModulos($proyecto["modulo2"],$conectar)."</td>";
            echo "<td>".meterModulos($proyecto["modulo3"],$conectar)."</td>";
            echo "<td>$proyecto[nomAlum]</td>";
            echo "<td>$proyecto[nomTutor]</td>";
            echo "<td><button><a href='formulario_modificar_proyecto.php?id_proyecto=$proyecto[id_proyecto]'>Modificar</a></button></td>";
            echo "<td><button><a href='../controlador/eliminar.php?id_proyecto=$proyecto[id_proyecto]'>Eliminar</a></button></td>";
            echo "</tr>";
    }
$conectar=null;
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
            echo "<td><button><a href='formulario_modificar_proyecto_Admin.php?id_proyecto=$proyecto[id_proyecto]'>Modificar</a></button></td>";
            echo "<td><button><a href='../../controlador/admin/completarAdmin.php?id_proyecto=$proyecto[id_proyecto]'>Completar</a></button></td>";
            echo "</tr>";
        }
    }
$conectar=null;
}
