<?php require 'header/doctype.php'; ?>
<link rel="stylesheet" type="text/css" href="../public/css/main_eventos.css">
<?php require 'header/title.php'; ?>
<div class="container">
<?php require 'header.php'; ?>

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
                            <p><?php require '../modelos/FechaE.php' ?></p>
                        </div>
                        <div class="icon-clock">
                            <i class="far fa-clock"></i>
                            <p><?php echo $row['Hora']; ?></p>
                        </div>
                    </div>
                        <?php if ($row['Estado'] == 'ACTIVO'){?>
                            <a href="../formulario/registro.php">Registrate</a>
                        <?php } else {?>
                            <a href="#">Concluido</a>
                        <?php } ?>
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
<?php require 'footer.php'?>
