<?php
    require '../config/Conexion_MTD.php';

    $id=$_REQUEST['ID_titulo'];
    $fecha=$_POST['fecha'];
    $titulo=$_POST['titulo'];
    $categoria=$_POST['categoria'];
    $descripcion=$_POST['descripcion'];
    $contenido=$_POST['contenido'];
    $enlace=$_POST['enlace'];

    if(isset($_REQUEST['modificar'])){
        $query="UPDATE dtBlog SET titulo='$titulo', fecha='$fecha', categoria='$categoria', descripcion='$descripcion', contenido='$contenido', enlace='$enlace'
                    WHERE ID_titulo ='$id'";
        
        $resultado= $conexion ->query($query);
    
        if($resultado){
            header('Location: ../vistas/adminB.php');
        }else{
            echo '<script> alert("Error")</script>';
        };
    }
?>