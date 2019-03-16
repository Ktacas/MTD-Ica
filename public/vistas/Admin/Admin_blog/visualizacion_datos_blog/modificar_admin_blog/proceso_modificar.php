<?php
    include '../../conexion_db_blog.php';

    $id=$_REQUEST['ID_titulo'];
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $fecha=$_POST['fecha'];
    $titulo=$_POST['titulo'];
    $categoria=$_POST['categoria'];
    $descripcion=$_POST['descripcion'];

    if(isset($_REQUEST['modificar'])){
        $query="UPDATE dtBlog SET titulo='$titulo', imagen='$imagen', fecha='$fecha', categoria='$categoria', descripcion='$descripcion'
                    WHERE ID_titulo ='$id'";
        
        $resultado= $conexion ->query($query);
    
        if($resultado){
            header('Location: ../visualizar_blog.php');
        }else{
            echo '<script> alert("Error")</script>';
        };
    }
?>