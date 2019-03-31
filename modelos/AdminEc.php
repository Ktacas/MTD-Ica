<?php
    require '../config/Conexion_MTD.php';

    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $titulo=$_POST['titulo'];
    $subtitulo=$_POST['subtitulo'];
    $descripcion=$_POST['descripcion'];
    $enlace=$_POST['enlace'];
    $lugar=$_POST['lugar'];
    $estado=$_POST['estado'];
    $nivel=$_POST['nivel'];

    if(isset($_REQUEST['enviar'])){
        $query="INSERT INTO `tbEventos` (`Titulo`, `Subtitulo`, `Fecha`, `Hora`, `Imagen`, `Descripcion`, `Lugar`, `Enlace`, `Estado`, `Nivel`) 
                    VALUES('$titulo','$subtitulo', '$fecha', '$hora','$imagen', '$descripcion', '$lugar', '$enlace', '$estado', '$nivel')";
        
        $resultado= $conexion ->query($query);
    
        if($resultado){
            header('Location: ../vistas/adminE.php');            
        }else{
            echo '<script> alert("Error")</script>';
        };
    }
?>