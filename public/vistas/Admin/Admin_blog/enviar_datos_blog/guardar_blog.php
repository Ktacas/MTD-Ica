<?php
    include '../conexion_db_blog.php';

    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $fecha=$_POST['fecha'];
    $titulo=$_POST['titulo'];
    $categoria=$_POST['categoria'];
    $descripcion=$_POST['descripcion'];
    $contenido=$_POST['contenido'];
    $enlace=$_POST['enlace'];

    if(isset($_REQUEST['enviar'])){
        $query="INSERT INTO dtBlog(titulo, imagen, fecha, categoria, descripcion, contenido, enlace) 
                    VALUES('$titulo','$imagen', '$fecha', '$categoria', '$descripcion', '$contenido', '$enlace')";
        
        $resultado= $conexion ->query($query);
    
        if($resultado){
            header('Location: ../visualizacion_datos_blog/visualizar_blog.php');
        }else{
            echo '<script> alert("Error")</script>';
        };
    }
?>