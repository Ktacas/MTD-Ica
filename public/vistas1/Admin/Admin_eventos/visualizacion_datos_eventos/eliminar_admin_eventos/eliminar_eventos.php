<?php
    require '../../../../../config/Conexion_Ev.php';

    $id=$_REQUEST['ID_titulo'];

    $query="DELETE FROM `tbeventos` WHERE ID_titulo ='$id'";
        
    $resultado= $conexion ->query($query);
    
    if($resultado){
        header('Location: ../visualizar_eventos.php');
    }else{
        echo '<script> alert("Error")</script>';
    };
?>