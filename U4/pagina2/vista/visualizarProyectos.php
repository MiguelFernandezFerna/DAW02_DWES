<?php
    include_once("../config/conexion.php");

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

    function visualizarDatos(){
        $conectar = conexion();

        $consulta = "select p.*, a.nombre as nomAlum, t.nombre as nomTutor from proyecto p left outer join alumnos a on p.alumno = a.id_alumno left outer join tutor t on p.tutor = t.id_tutor;";
        $sentencia = $conectar -> prepare($consulta);
        $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
        $sentencia -> execute();
    
        $listaProyecto = $sentencia -> fetchAll();
        foreach ($listaProyecto as $proyecto) {
            echo "<tr>";
            echo "<td>$proyecto[id_proyecto]</td>";
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