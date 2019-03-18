<?php
    require '../../../../config/Conexion_Ev.php';

    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $titulo=$_POST['titulo'];
    $subtitulo=$_POST['subtitulo'];
    $descripcion=$_POST['descripcion'];
    $enlace=$_POST['enlace'];
    $lugar=$_POST['lugar'];
    $estado=$_POST['estado'];

    if(isset($_REQUEST['enviar'])){
        $query="INSERT INTO `tbeventos` (`Titulo`, `Subtitulo`, `Fecha`, `Hora`, `Imagen`, `Descripcion`, `Lugar`, `Enlace`, `Estado`) 
                    VALUES('$titulo','$subtitulo', '$fecha', '$hora','$imagen', '$descripcion', '$lugar', '$enlace', '$estado')";
        
        $resultado= $conexion ->query($query);
    
        if($resultado){
            header('Location: ../visualizacion_datos_eventos/visualizar_eventos.php');            
        }else{
            echo '<script> alert("Error")</script>';
        };
    }
?>