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
        <link rel="stylesheet" type="text/css" href="../../public/css/main_b.css">
    <link rel="stylesheet" href="../../public/css/normalize.css">
    <title>Container</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <!-- contenedor -->
            <div class="container_header">
                <!-- logo -->
                <figure class="logo">
                    <img src="../../public/img/Blanco800x346.png" alt="logo">
                </figure>
                <!-- nav -->
                <nav class="menu">
                    <ul>
                        <li><a class="cool-link" href="../Principal/index.php">Inicio</a></li>
                        <li><a class="cool-link" href="../Core/Index_core.php">Core</a></li>
                        <li><a class="cool-link" href="../Eventos/Index_eventos.php">Eventos</a></li>
                        <li><a class="cool-link" href="../Blog/Index_blog.php">Blogs</a></li>
                        <li><a class="button-link" href="../login/login.php">SIGN</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="post">
            <?php require 'listar_blog.php'?>
        </section>
        <aside class="aside">
            <div class="container-search">
                <h3>Búsqueda</h3>
                <div class="container-align">
                    <form action="buscar_blog.php" method="post">
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
                        <img src="../../public/img/blog_post1.png" alt="">
                    </figure>
                    <p class="content-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                </article>
                <article class="blog-post">
                    <figure class="miniature">
                        <img src="../../public/img/blog_post1.png" alt="">
                    </figure>
                    <p class="content-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                </article>
                <article class="blog-post">
                    <figure class="miniature">
                        <img src="../../public/img/blog_post1.png" alt="">
                    </figure>
                    <p class="content-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                </article>
                <article class="blog-post">
                    <figure class="miniature">
                        <img src="../../public/img/blog_post1.png" alt="">
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
        <section class="other">
            <nav class="container-other">
                <?php include 'paginacion.php'; ?>
            </nav>
        </section>
        <footer class="footer">
            <!-- logo -->
            <figure class="logo_footer">
                    <img src="../../public/img/Blanco800x346.png" alt="logo">
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