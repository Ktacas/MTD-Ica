<?php 
    $query = "SELECT * FROM `tbeventos` 
                WHERE Estado ='FINALIZADO' OR Estado ='ACTIVO' 
                    ORDER BY Estado ASC";

    $resultado= $conexion->query($query);

while ( $row = $resultado->fetch_assoc()){?> 
    <a href="Eventos.php?ID_titulo=<?php echo $row['ID_titulo']; ?>" class="items">
        <figure class="image-items">
            <img src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>" alt="">
        </figure>
        <span class="post-overlay">
            <h3><?php echo $row['Titulo']; ?></h3>
            <p>Evento realizado el <span><?php echo $row['Fecha']; ?></span> en <?php echo $row['Lugar']; ?></p>
            <p>Realizado en <span><?php echo $row['Lugar']; ?></span></p>
            <h3><?php echo $row['Estado']; ?></h3>
        </span>
    </a>
<?php } ?>