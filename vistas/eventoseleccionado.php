<?php require 'header.php'?>

        <section class="hero">
            <?php require '../modelos/EventoSeleccionado.php'; ?>
            
            <div class="container-hero">
                <div class="black"></div>
                <div class="black"></div>
                <figure class="image-hero">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>" alt="">
                </figure>
                <div class="content-hero">
                    <h2><?php echo $row['Titulo']; ?></h2>
                    <h3><?php echo $row['Subtitulo']; ?></h3>
                    <div class="icons">
                        <div class="icon-calendar">
                            <i class="far fa-calendar-alt"></i>
                            <p>
                                12 de Marzo del 2019
                            </p>
                        </div>
                        <div class="icon-clock">
                            <i class="far fa-clock"></i>
                            <p><?php echo $row['Hora']; ?></p>
                        </div>
                    </div>
                    <a href="../formulario/registro.php">Registrate</a>
                </div>
            </div>
        </section>
        <section class="description">
            <div class="container-description">
                <div class="tag-description">Descripción</div>
                <article class="content-description">
                    <p> <?php echo $row['Descripcion']; ?></p>
                </article>
            </div>
        </section>
        <section class="ubication">
            <div class="container-ubication">
                <div class="site-ubication"><i class="fas fa-map-marker-alt"></i>
                    <p><?php echo $row['Lugar']; ?></p>
                </div>
                <?php echo $row['Enlace']?>
            </div>
        </section>
        <section class="share">
            <h2 class="title-share">Difundir entre amigos</h2>
            <div class="container-share">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </section>
        <section class="comment">
            <div class="container-comment">
                <div class="tag-comment">Escriba un comentario</div>
                <form class="text-comment" action="ComentarioE.php?ID_titulo=<?php echo $id=$_REQUEST['ID_titulo']; ?>" method="POST">
                    <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>
                    <input type="submit" value="Comentar" name="comentar" id="comentar" class="button-comment">
                </form>
            </div>
        </section>

<?php require 'footer.php'?>
