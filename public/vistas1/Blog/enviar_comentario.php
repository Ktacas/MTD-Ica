<?php
    require '../../config/Conexion_Bl.php';

    $comentario=$_POST['comentario'];
    
    $id=$_REQUEST['ID_titulo'];

    $query = "SELECT * FROM dtblog WHERE ID_titulo='$id'";
        
    $resultado= $conexion->query($query);
    
    $row = $resultado->fetch_assoc();

    $titulo=$row['titulo'];
    
    if(isset($_REQUEST['comentar'])){
        $query="INSERT INTO dtcomentario(titulo, comentario) VALUES('$titulo','$comentario')";
            
        $resultado= $conexion->query($query);
        
        if($resultado){
            header ('Location: Index_blog.php');
        }else{
            echo '<script> alert("Error")</script>';
        }
    }
?>