<?php require 'header/doctype.php'; ?>
<link rel="stylesheet" href="../public/css/main.css">
<?php require 'header/title.php'; ?>
<div class="container">
<?php require 'header.php'; ?>
    
        <section class="hero">
            <!-- video -->
            <video src="../public/video/160330.mp4" autoplay loop muted></video>
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
                        <img src="../public/img/perfil_core1.jpg" id="img" alt="">
                    </figure>
                    <h2 class="title_core">Kattya Garcia Velasquez</h2>
                    <div class="descripion_core">
                        <h3>Desarrollador de Software, Gestión de proyectos, Desarrollador de Sitios Web y SCRUM</h3>
                        <p>Microsoft Influencer en <span>MTDeveloper Ica</span> and Community Lead MTDeveloper Ica</p>
                    </div>
                    <a class="bottom_core" href="core">Más info</a>
                </div>
            </div>
        </section>

        <section class="events">
            <div class="slider">
                <?php require '../modelos/IndexE.php' ?>
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
                        <?php require '../modelos/IndexB.php' ?>
                    </div>
                </div>
            <i class="fas fa-angle-right"></i>
            </div>
            <div class="container-button">
                <a href="../Blog/Index_blog"><button class="learn-more">
                    <div class="circle">
                        <span class="icon arrow"></span>
                    </div>
                <a href="blog"><p class="button-text">Ver más</p></a>
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
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                    </div>
                    <h2 class="title_bottom">Sobre Nosotros</h2>
                    <div class="container-flex">
                        <p>Somos un Club de Estudiantes o 
                            Comunidad Académica encargada de
                            la difusión de tecnologías Microsoft y 
                            entrenamiento de estudiantes para que se 
                            puedan desarrollar en el mundo de la 
                            computación e informática, teniendo como 
                            objetivo lograr la formación de profesionales
                             de calidad.</p>
                    </div>
                    <div class="icon_container">
                        <div class="item-icon">
                            <i class="fab fa-windows"></i>
                            <p>Tecnologías</p>
                        </div>
                        <div class="item-icon">
                            <i class="fas fa-laptop-code"></i>
                            <p>Desarollo</p>
                        </div>
                        <div class="item-icon">
                            <i class="fas fa-database"></i>
                            <p>Base de datos</p>
                        </div>
                        <div class="item-icon">
                            <i class="fab fa-html5"></i>
                            <p>Diseño y Frontend</p>
                        </div>
                    </div>
                </div>     
            </div>         
        </section>

<?php require 'footer.php' ?>
