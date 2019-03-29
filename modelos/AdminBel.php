<?php
    require '../config/Conexion_MTD.php';

    $id=$_REQUEST['ID_titulo'];

    $query="DELETE FROM dtBlog WHERE ID_titulo ='$id'";
        
    $resultado= $conexion ->query($query);
    
    if($resultado){
        header('Location: ../vistas/adminB.php');
    }else{
        echo '<script> alert("Error")</script>';
    };
?>