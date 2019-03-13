<?php
    $conexion=mysqli_connect('localhost','root','','dbblog');

    $query = "SELECT * FROM dtblog ORDER BY ID_titulo DESC LIMIT 3";

    $resultado= $conexion->query($query);

    while ($row = $resultado->fetch_assoc()){
?>
    <article class="box_blog">
        <figure class="image_box">
            <!-- <img src="https://img.youtube.com/vi/<?php echo $row['enlace'];?>/hq2.jpg" alt=""> -->
            <img src="../../img/blog_post1.jpg" alt="">
        </figure>
        <div class="detail_box">
        <h2><a class="link-box" href="../Blog/blog.php?ID_titulo=<?php echo $row['ID_titulo']; ?>"><?php echo $row['titulo']; ?></a></h2>
            <!-- <p class="categories-box"><?php echo $row['categoria']; ?> -->
        <p>Publicado el&nbsp<span>07 de Marzo del 2019</span></p>
        <div class="perfil-box">
             <figure class="image-perfil">
                 <img src="../../img/perfil_core2.jpg" alt="">
             </figure>
             <a class="link-perfil" href="#">Daniela Galindo Maldonado</a>
        </div>
            <!-- <p><?php echo $row['categoria']; ?> <span><?php echo $row['fecha']; ?></span></p> -->
        </div>
    </article>
<?php } ?>