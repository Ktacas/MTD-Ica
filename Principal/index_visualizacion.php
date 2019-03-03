<?php
    $conexion=mysqli_connect('localhost','root','','dbblog');

    $query = "SELECT * FROM dtblog";

    $resultado= $conexion->query($query);

    while ($row = $resultado->fetch_assoc()){
?>
    <article class="box_blog">
        <figure class="image_box">
            <img src="https://img.youtube.com/vi/<?php echo $row['enlace'];?>/hq2.jpg" alt="">
        </figure>
        <div class="detail_box">
            <h4><a href="../Blog/blog.php?ID_titulo=<?php echo $row['ID_titulo']; ?>"><?php echo $row['titulo']; ?></a></h4>
            <p><?php echo $row['categoria']; ?> <span><?php echo $row['fecha']; ?></span></p>
            <div class="container_box_perfil">
                <figure class="perfil_box">
                    <img src="../images/perfil_core2.jpg" alt="">
                </figure>
                <p>NombreCore</p>
            </div>
        </div>
    </article>
<?php } ?>