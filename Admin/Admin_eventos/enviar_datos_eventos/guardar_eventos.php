<?php
    include '../conexion_db_eventos.php';

    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $titulo=$_POST['titulo'];
    $subtitulo=$_POST['subtitulo'];
    $descripcion=$_POST['descripcion'];
    $enlace=$_POST['enlace'];
    $lugar=$_POST['lugar'];

    if(isset($_REQUEST['enviar'])){
        $query="INSERT INTO `tbeventos` (`Titulo`, `Subtitulo`, `Fecha`, `Hora`, `Imagen`, `Descripcion`, `Lugar`, `Enlace`) 
                    VALUES('$titulo','$subtitulo', '$fecha', '$hora','$imagen', '$descripcion', '$lugar', '$enlace')";
        
        $resultado= $conexion ->query($query);
    
        if($resultado){
            header('Location: ../visualizacion_datos_eventos/visualizar_eventos.php');            
        }else{
            echo '<script> alert("Error")</script>';
        };
    }
?>