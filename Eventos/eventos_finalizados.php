<?php 
    $query = "SELECT * FROM `tbeventos` 
                WHERE `Estado` 
                    LIKE 'FINALIZADO'";

    $resultado= $conexion->query($query);

while ( $row = $resultado->fetch_assoc()){?> 
    <a href="Eventos.php" class="items">
        <figure class="image-items">
            <img src="../images/g2.png" alt="">
        </figure>
        <span class="post-overlay">
            <h3><?php echo $row['Titulo']; ?></h3>
            <p>Evento realizado el <span><?php echo $row['Fecha']; ?></span> en <?php echo $row['Lugar']; ?></p>
            <p>Realizado en <span><?php echo $row['Lugar']; ?></span></p>
        </span>
    </a>
<?php } ?>