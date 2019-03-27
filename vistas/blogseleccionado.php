<?php require 'header/doctype.php'; ?>
<link rel="stylesheet" type="text/css" href="../public/css/main_blog.css">
<?php require 'header/title.php'; ?>
<div class="container">
<?php require 'header.php'; ?>

<?php require_once '../modelos/BlogSeleccionado.php' ?>

<div class="false"></div>
        <section class="content">
            <h2 class="title-content"><?php echo $row['titulo']; ?></h2>
            <figure class="image-content">
                <iframe width="1060" height="500" src="https://www.youtube.com/embed/<?php echo $row['enlace'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </figure>
            <div class="details-content">
                <p>Publicado el&nbsp;<span><?php require '../modelos/FechaB.php' ?></span></p>
                <div class="icon-content">
                    <i class="fas fa-heart"></i>
                    <span class="heart-number">23</span>
                    <i class="far fa-comment"></i>
                    <span class="comment-number">12</span>
                </div>
            </div>
            <div class="line"></div>
            <div class="perfil-content">
                <figure class="avatar-content">
                <img src="../public/img/perfil_core2.jpg" alt="">
                </figure>
                <a class="name-perfil" href="#">Daniela Galindo Maldonado</a>
            </div>
            <div class="text-content">
                <p><?php echo $row['contenido']; ?></p>
            </div>
        </section>
        <section class="comment">
            <div class="container-comment">
                    <div class="tag-comment">Escriba un comentario</div>
                    <form class="text-comment" action="ComentarioB.php?ID_titulo=<?php echo $id=$_REQUEST['ID_titulo']; ?>" method="POST">
                        <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>
                        <input type="submit" value="Comentar" name="comentar" id="comentar" class="button-comment">
                    </form>
            </div>       
        </section>
<?php require 'footer.php' ?>