<?php
    $conexion=mysqli_connect('localhost','root','','dbeventos');

    $query = "SELECT * FROM `tbeventos`";

    $resultado= $conexion->query($query);

    while ($row = $resultado->fetch_assoc()){
?>
    <div class="slide">
        <div class="container_events">
            <div class="division_events">
                <div class="transparent"></div>
                <div class="tag_events">Eventos</div>
                <h2 class="title_events"><?php echo $row['Titulo']; ?></h2>
                <p class="description_events"><?php echo $row['Descripcion']; ?></p>
                <a class="bottom_events" href="../Eventos/Eventos.php?ID_titulo=<?php echo $row['ID_titulo']; ?>">Más info</a>
                <div class="line_events"></div>
                <figure class="image_events">
                    <img src="../images/eventos_principal1.png" alt="">
                </figure>
            </div>
        </div>
    </div>
<?php } ?>



                