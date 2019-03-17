<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/main_eventos.css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <title>Eventos</title>
</head>

<body>
    <div class="container">
        <header class="header">
            <!-- contenedor -->
            <div class="container_header">
                <!-- logo -->
                <figure class="logo">
                    <img src="../../img/Blanco800x346.png" alt="logo">
                </figure>
                <!-- nav -->
                <nav class="menu">
                    <ul>
                        <li><a class="cool-link" href="../Principal/index.php">Inicio</a></li>
                        <li><a class="cool-link" href="../Core/Index_core.php">Core</a></li>
                        <li><a class="cool-link" href="../Eventos/Index_eventos.php">Eventos</a></li>
                        <li><a class="cool-link" href="../Blog/Index_blog.php">Blogs</a></li>
                        <li><a class="button-link" href="#">Se miembro</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="hero">
            <?php 
                $conexion=mysqli_connect('localhost','root','','dbeventos');

                $id=$_REQUEST['ID_titulo'];

                $query = "SELECT * FROM `tbeventos` WHERE ID_titulo='$id'";
                
                $resultado= $conexion->query($query);
                
                $row = $resultado->fetch_assoc();
            ?>
            <div class="container-hero">
                <div class="black"></div>
                <div class="black"></div>
                <figure class="image-hero">
                    <img src="../../img/eventos_principal1.png" alt="">
                </figure>
                <div class="content-hero">
                    <h2><?php echo $row['Titulo']; ?></h2>
                    <h3><?php echo $row['Subtitulo']; ?></h3>
                    <div class="icon-calendar">
                        <i class="far fa-calendar-alt"></i>
                        <p><?php echo $row['Fecha']; ?></p>
                    </div>
                    <div class="icon-clock">
                        <i class="far fa-clock"></i>
                        <p><?php echo $row['Hora']; ?></p>
                    </div>
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
                <form class="text-comment" action="">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <input type="button" value="Enviar" class="button-comment">
                </form>
            </div>
        </section>
        <footer class="footer">
            <!-- logo -->
            <figure class="logo_footer">
                <img src="../../img/Blanco800x346.png" alt="logo">
            </figure>
            <div class="info_footer">
                <p>Design with 💕by
                    <a href="#">@DanPipa</a>
                    <a href="#">@Karlxs</a>
                    <a href="#">@TheJeus</a>
                    <a href="#">@Arnolín</a>
                </p>
            </div>
        </footer>
    </div>
</body>

</html>