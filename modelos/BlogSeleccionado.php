<?php 
    require '../config/Conexion_Bl.php';
    
    $id=$_REQUEST['ID_titulo'];
    $query = "SELECT ID_titulo, enlace, titulo, categoria, Year(fecha) ,Month(fecha), Day(fecha), contenido, descripcion FROM dtblog WHERE ID_titulo='$id'";
    
    $resultado= $conexion->query($query);
    
    $row = $resultado->fetch_assoc();   
?>