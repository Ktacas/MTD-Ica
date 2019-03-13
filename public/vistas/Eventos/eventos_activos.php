<?php 
    $query = "SELECT * FROM `tbeventos` 
                WHERE `Estado` 
                    LIKE 'ACTIVO'";

    $resultado= $conexion->query($query);

while ( $row = $resultado->fetch_assoc()){?> 
    <section class="hero">
        <div class="black"></div>
        <div class="black"></div>
        <div class="content">
            <div class="circle-content"></div>
            <h2 class="title-content"><?php echo $row['Titulo']; ?></h2>
            <h4 class="sub-content"><?php echo $row['Subtitulo']; ?></h4>
            <p class="date-content"><?php echo $row['Fecha']; ?></p>
            <a href="Eventos.php?ID_titulo=<?php echo $row['ID_titulo']; ?>" class="button-content">Ver más</a>
        </div>
        <figure class="event-image">
            <img src="../../img/eventos_principal1.png" alt="">
        </figure>
    </section>
<?php } ?>

