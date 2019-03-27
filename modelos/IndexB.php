<?php
    require '../config/Conexion_Bl.php';

    $query = "SELECT * FROM dtblog ORDER BY ID_titulo ASC LIMIT 3";

    $resultado= $conexion->query($query);

    while ($row = $resultado->fetch_assoc()){
?>
    <article class="box_blog">
    <a class="link-box" href="blogseleccionado.php?ID_titulo=<?php echo $row['ID_titulo']; ?>">
        <figure class="image_box">
            <img src="https://img.youtube.com/vi/<?php echo $row['enlace'];?>/maxresdefault.jpg" alt="">
        </figure>
    </a>
        <div class="detail_box">
        <h2><a class="link-box" href="blogseleccionado.php?ID_titulo=<?php echo $row['ID_titulo']; ?>"><?php echo $row['titulo']; ?></a></h2>
        <p class="categories-box"><?php echo $row['categoria']; ?></p> 
        <p>Publicado el&nbsp<span><?php echo $row['fecha']; ?></span></p>
        <div class="perfil-box">
             <figure class="image-perfil">
                 <img src="../../img/perfil_core2.jpg" alt="">
             </figure>
             <a class="link-perfil" href="#">Daniela Galindo Maldonado</a>
        
    </article>
<?php } ?>