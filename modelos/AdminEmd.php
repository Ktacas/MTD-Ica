<?php
    require '../config/Conexion_Ev.php';

    $id=$_REQUEST['ID_titulo'];
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $titulo=$_POST['titulo'];
    $subtitulo=$_POST['subtitulo'];
    $descripcion=$_POST['descripcion'];
    $enlace=$_POST['enlace'];
    $lugar=$_POST['lugar'];
    $estado=$_POST['estado'];

    if(isset($_REQUEST['modificar'])){
        $query="UPDATE `tbeventos` SET Titulo='$titulo', Subtitulo='$subtitulo', Imagen='$imagen', fecha='$fecha', Hora='$hora',Imagen='$imagen', Descripcion='$descripcion', Lugar='$lugar', Enlace='$enlace', Estado='$estado'
                    WHERE ID_titulo ='$id'";
        
        $resultado= $conexion ->query($query);
    
        if($resultado){
            header('Location: ../vistas/adminE.php');
        }else{
            echo '<script> alert("Error")</script>';
        };
    }
?>