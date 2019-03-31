<?php 
    require '../config/Conexion_MTD.php';

    $id=$_REQUEST['ID_titulo'];

    $query = "SELECT ID_titulo, Titulo, Subtitulo, Imagen, Year(Fecha), Month(Fecha), Day(Fecha), Hora, Descripcion, Enlace, Lugar, Estado  FROM `tbeventos` WHERE ID_titulo='$id'";
    
    $resultado= $conexion->query($query);
    
    $row = $resultado->fetch_assoc();
?>