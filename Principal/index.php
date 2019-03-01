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
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
    <title>MTDevelopers</title>
</head>

<body>
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
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Core</a></li>
                        <li><a href="../Eventos/Index_eventos.php">Eventos</a></li>
                        <li><a href="../Blog/Index_blog.php">Blogs</a></li>
                        <li><a href="#">Se miembro</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="hero">
            <!-- video -->
            <video src="video/160330_1_Typing1_Mpeg4_4K (2).mp4" autoplay loop muted></video>
            <!-- overlay(Fondo azul trasnparente) -->
            <div class="overlay"></div>
            <!-- contenedor-texto -->
            <div class="content">
                <h1>aprende, crea y comparte</h1>
                <h4>¿Ya eres parte de nuestro equipo?</h4>
                <a href="#">Descrubre más</a>
            </div>
        </section>
        <section class="core">
            <div class="container_core">
                <div class="division_core">
                    <figure class="image_core">
                        <img src="../images/perfil_core1.jpg" id="img" alt="">
                    </figure>
                    <h2 class="title_core">Lorem ipsum dolor sit amet, consectetur</br> adipiscing elit, sed do eiusmod
                    </h2>
                    <div class="descripion_core">
                        <p>Lorem ipsum <span>dolor sit amet</span>, consectetur </p>
                    </div>
                    <a class="bottom_core" href="#">Más info</a>
                </div>
            </div>
        </section>
        <section class="events">
            <div class="container_events">
                <div class="division_events">
                    <div class="tag_events">Eventos</div>
                    <h2 class="title_events">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt</h2>
                    <p class="description_events">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris
                    </p>
                    <a class="bottom_events" href="#">Más info</a>
                    <div class="line_events"></div>
                    <figure class="image_events">
                        <img src="../images/eventos_principal1.png" alt="">
                    </figure>
                </div>
            </div>
        </section>
        
        <section class="blog">
            <div class="container_blog">
                <div class="division_blog">
                    <div class="tag_blog">
                        <p>Blog</p>
                    </div>
                    <div class="container_box">
                        <?php include 'index_visualizacion.php' ?>
                    </div>
                    <a class="bottom_blog" href="../Blog/Index_blog.php">Ver más</a>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="container_contact">
                <div class="top"></div>
                <div class="bottom">
                    <h2 class="title_bottom">¿Quieres ser parte de nuestro equipo?</h2>
                    <input class="text_bottom" type="text" placeholder="Nombre completo">
                    <input class="email_bottom" type="email" name="" id="" placeholder="Déjanos tu email">
                    <button class="button_bottom">Enviar</button>
                    <div class="social_bottom">
                        <a href="#" class="social_link">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="#" class="social_link">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
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