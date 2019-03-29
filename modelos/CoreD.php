<?php
    require '../config/Conexion_MTD.php';

    $id=isset($_REQUEST['ID_core'])? $_REQUEST['ID_core']:"1";

    $query = "SELECT * FROM dtcore WHERE ID_core='$id'";
    
    $resultado= $conexion->query($query);

    $row = $resultado->fetch_assoc();
?>