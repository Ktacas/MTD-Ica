<?php
    require '../config/Conexion_MTD.php';

    $id=$_REQUEST['ID_titulo'];

    $query="DELETE FROM `tbeventos` WHERE ID_titulo ='$id'";
        
    $resultado= $conexion ->query($query);
    
    if($resultado){
        header('Location: ../vistas/adminE.php');
    }else{
        echo '<script> alert("Error")</script>';
    };
?>