<?php
    require '../config/Conexion_Bl.php';

    $fecha=$_POST['fecha'];
    $titulo=$_POST['titulo'];
    $categoria=$_POST['categoria'];
    $descripcion=$_POST['descripcion'];
    $contenido=$_POST['contenido'];
    $enlace=$_POST['enlace'];

    if(isset($_REQUEST['enviar'])){
        $query="INSERT INTO dtBlog(titulo, fecha, categoria, descripcion, contenido, enlace) 
                    VALUES('$titulo', '$fecha', '$categoria', '$descripcion', '$contenido', '$enlace')";
        
        $resultado= $conexion ->query($query);
    
        if($resultado){
            header('Location: ../vistas/adminB.php');
        }else{
            echo '<script> alert("Error")</script>';
        };
    }
?>