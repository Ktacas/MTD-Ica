<?php require 'header.php'; ?> 
        <section class="hero">
            <!-- video -->
            <video src="../public/video/160330_1_Typing1_Mpeg4_4K (2).mp4" autoplay loop muted></video>
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
                    <a class="bottom_core" href="../Core/Index_core.php">Más info</a>
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
<?php require 'footer.php' ?>
