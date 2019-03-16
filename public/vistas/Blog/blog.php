<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/main_e.css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <title>Container</title>
</head>

<body>
    <?php 
    $conexion=mysqli_connect('localhost','root','','dbblog');
    
    $id=$_REQUEST['ID_titulo'];
    $query = "SELECT * FROM dtblog WHERE ID_titulo='$id'";
    
    $resultado= $conexion->query($query);
    
    $row = $resultado->fetch_assoc();   
    ?>

    <div class="container">
        <header class="header">
            <!-- contenedor -->
            <div class="container_header">
                <!-- logo -->
                <figure class="logo">
                    <img src="../images/Blanco800x346.png" alt="logo">
                </figure>
                <!-- nav -->
                <nav class="menu">
                    <ul>
                        <li><a class="cool-link" href="../Principal/index.php">Inicio</a></li>
                        <li><a class="cool-link" href="../Core/Index_core.php">Core</a></li>
                        <li><a class="cool-link" href="../Eventos/Index_eventos.php">Eventos</a></li>
                        <li><a class="cool-link" href="Index_blog.php">Blogs</a></li>
                        <li><a class="button-link" href="#">Se miembro</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="content">
            <h2 class="title-content"><?php echo $row['titulo']; ?></h2>
            <figure class="image-content">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $row['enlace'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </figure>
            <div class="details-content">
                <h4><?php echo $row['fecha']; ?></h4>
                <div class="icon-content">
                    <i class="fas fa-heart"></i>
                    <span class="heart-number">23</span>
                    <i class="far fa-comment"></i>
                    <span class="comment-number">12</span>
                </div>
            </div>
            <div class="perfil-content">
                <figure class="avatar-content">
                <img src="../images/perfil_core2.jpg" alt="">
                </figure>
                <p class="name-perfil">Lorem ipsum</p>
            </div>
            <div class="text-content">
                <p><?php echo $row['contenido']; ?></p>
            </div>
        </section>
        <aside class="aside">
            <div class="container-search">
                <h3>Búsqueda</h3>
                <div class="container-align">
                    <form action="" method="post">
                        <input name="busqueda" id="busqueda" type="search" class="search" placeholder="Buscar por ..." value="">
                        <input type="submit" name="buscar" id="buscar" class="buscar"  name="buscar" value="Go!">
                    </form>
                </div>
            </div>
            <div class="container-aside">
                <div class="line-aside"></div>
                <h3>Lo más leido</h3>
                <article class="blog-post">
                    <figure class="miniature">
                        <img src="../images/blog_post1.png" alt="">
                    </figure>
                    <p class="content-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                </article>
                <article class="blog-post">
                    <figure class="miniature">
                        <img src="../images/blog_post1.png" alt="">
                    </figure>
                    <p class="content-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                </article>
                <article class="blog-post">
                    <figure class="miniature">
                        <img src="../images/blog_post1.png" alt="">
                    </figure>
                    <p class="content-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                </article>
                <article class="blog-post">
                    <figure class="miniature">
                        <img src="../images/blog_post1.png" alt="">
                    </figure>
                    <p class="content-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                </article>
            </div>
            <div class="container-categories">
                <div class="tag-categories">Categorías</div>
                <div class="background-categories">
                    <div class="items-categories">
                        <a href="">Web Design</a>
                        <a href="">Visual Studio</a>
                        <a href="">HTML5</a>
                        <a href="">JavaScript</a>
                        <a href="">Azure</a>
                        <a href="">CSS3</a>
                    </div>
                </div>
            </div>
        </aside>
        <section class="comment">
            <div class="container-comment">
                    <div class="tag-comment">Escriba un comentario</div>
                    <form class="text-comment" action="enviar_comentario.php?ID_titulo=<?php echo $id=$_REQUEST['ID_titulo']; ?>" method="POST">
                        <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>
                        <input type="submit" value="Comentar" name="comentar" id="comentar" class="button-comment">
                    </form>
            </div>       
        </section>
        <footer class="footer">
            <!-- logo -->
            <figure class="logo_footer">
                <img src="../images/Blanco800x346.png" alt="logo">
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