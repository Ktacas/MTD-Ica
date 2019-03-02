<?php
    include '../../conexion_db_blog.php';

    $id=$_REQUEST['ID_titulo'];

    $query="DELETE FROM dtBlog WHERE ID_titulo ='$id'";
        
    $resultado= $conexion ->query($query);
    
    if($resultado){
        header('Location: ../visualizar_blog.php');
    }else{
        echo '<script> alert("Error")</script>';
    };
?>