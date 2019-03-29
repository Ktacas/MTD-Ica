<?php 
    require '../config/Conexion_MTD.php';
    
    $query = "SELECT ID_titulo,Titulo, Imagen, Year(Fecha), Month(Fecha), Day(Fecha), Lugar, Estado FROM `tbeventos` 
                WHERE Estado ='FINALIZADO' OR Estado ='ACTIVO' 
                    ORDER BY Estado ASC";

    $resultado= $conexion->query($query);

while ( $row = $resultado->fetch_assoc()){?> 
    <a href="eventoseleccionado?ID_titulo=<?php echo $row['ID_titulo']; ?>">
        <div class="items level-1">
            <img src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>" alt="">

        <span class="post-overlay">
            <h3><?php echo $row['Titulo']; ?></h3>
            <p>Evento realizado el <span><?php require 'FechaE.php' ?></span> en <?php echo $row['Lugar']; ?></p>
            <p>Realizado en <span><?php echo $row['Lugar']; ?></span></p>
            <h4><?php echo $row['Estado']; ?></h4>
        </span>
        </div>
    </a>
<?php } ?>
