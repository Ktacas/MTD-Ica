<?php
    require '../../config/Conexion_Ev.php';

    $query = "SELECT * FROM `tbeventos`";

    $resultado= $conexion->query($query);

    while ($row = $resultado->fetch_assoc()){
?>
    <div class="slide">
        <div class="container_events">
                <!-- <div class="transparent"></div>
                <div class="tag_events">Eventos</div>
                
                
                <div class="line_events"></div> -->
      
                <div class="container-figure">
                    <figure class="image_events">
                        <img src="../../img/eventos_principal1.png" alt="">
                    </figure>
                    <div class="content_a">
                        <h2 class="title_events"><?php echo $row['Titulo']; ?></h2>
                        <p class="description_events"><?php echo $row['Descripcion']; ?></p>
                    </div>
                    <a class="bottom_events" href="../Eventos/Eventos.php?ID_titulo=<?php echo $row['ID_titulo']; ?>">Más info</a>
                </div>
        </div>
    </div>
<?php } ?>



                