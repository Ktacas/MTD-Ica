<?php
    require '../config/Conexion_Cr.php';

    $sql = "SELECT * FROM `dtcore`";

    $respuesta= $conexion->query($sql);

    while ($reg = $respuesta->fetch_assoc()){
 ?>
        <div class="item_core">
            <figure class="members">
            <a href="core.php?ID_core=<?php echo $reg['ID_core']; ?>">
                <img src="data:image/jpg;base64,<?php echo base64_encode($reg['imagen']); ?>" alt="">
            </figure>
            </a>
            <p><?php echo $reg['nombre']; ?></p>
        </div>
 <?php
    }
 ?>