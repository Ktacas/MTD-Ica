<!DOCTYPE html>
<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:login.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/main.css">
    <title>MTDevelopers</title>
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
                        <li><a class="cool-link" href="index.php">Inicio</a></li>
                        <li><a class="cool-link" href="../Core/Index_core.php">Core</a></li>
                        <li><a class="cool-link" href="../Eventos/Index_eventos.php">Eventos</a></li>
                        <li><a class="cool-link" href="../Blog/Index_blog.php">Blogs</a></li>
                        <li><a href="../../../admin/index.php">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			            <li><a href="../../vistas/principal/index.php"> Cerrar Sesión </a></li>
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
                <h1 class="anim-typewriter">aprende, crea y comparte</h1>
                <h4>¿Ya eres parte de nuestro equipo?</h4>
                <a href="#">Descrubre más</a>
            </div>
        </section>
        <section class="core">
            <div class="container_core">
                <div class="division_core">
                    <figure class="image_core">
                        <img src="../../img/perfil_core1.jpg" id="img" alt="">
                    </figure>
                    <h2 class="title_core">Kattya Garcia Velasquez</h2>
                    <div class="descripion_core">
                        <h3>Desarrollador de Software, Gestión de proyectos, Desarrollador de Sitios Web y SCRUM</h3>
                        <p>Microsoft Influencer en <span>MTDeveloper Ica</span> and Community Lead MTDeveloper Ica</p>
                    </div>
                    <a class="bottom_core" href="../Core/Index_core.php">Más info</a>
                </div>
            </div>
        </section>

        <section class="events">
            <div class="slider">
                <?php include 'index_visualizacion_eventos.php'; ?>
            </div>
        </section>

        <section class="blog">
            <div class="container_blog">
            <i class="fas fa-angle-left"></i>
                <div class="division_blog">
                    <div class="tag_blog">
                        <h2>Blog</h2>
                    </div>
                    <div class="container_box">
                        <?php include 'index_visualizacion_blog.php'; ?>
                    </div>
                </div>
            <i class="fas fa-angle-right"></i>
            </div>
            <div class="container-button">
                <a href="../Blog/Index_blog.php"><button class="learn-more">
                    <div class="circle">
                        <span class="icon arrow"></span>
                    </div>
                <p class="button-text">Ver más</p>
                </button></a>
            </div>
        </section>
        <section class="contact">
            <div class="container_contact">
                <div class="bottom">
                    <div class="bubbels">
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubb
                        <div class="bubble"></div>
                    </div>
                    <h2 class="title_bottom">¿Quieres ser parte de nuestro equipo?</h2>
                    <div class="container-flex">
                    <form action="enviar.php" method="post">
                        <input for="names" class="text_bottom" type="text" placeholder="Nombre completo" id="name" name="nombre" required>
                        <input for="email" class="email_bottom" type="text" id="email" name="correo" placeholder="Déjanos tu email"  required>
                        <input type="submit" value="Enviar" class="button_bottom" id="btnEnviar" >
                    </form>
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