<?php 
    $email=isset($_POST['email'])? $_POST['email']:"";
    $contraseña=isset($_POST['contraseña'])? $_POST['contraseña']:"";

    require '../config/Conexion_Ad.php';
    $query = 'SELECT * FROM dtadmin';

    $resultado= $conexion->query($query);

    $row = $resultado->fetch_assoc();
    if($email == $row['email'] && $contraseña == $row['contraseña']){
        echo '<header class="header">
        <!-- contenedor -->
        <div class="container_header">
            <!-- logo -->
            <figure class="logo">
                <img src="../public/img/Blanco800x346.png" alt="logo">
            </figure>
            <!-- nav -->
            <nav class="menu">
                <ul>
                    <li><a class="cool-link" href="index.php">Inicio</a></li>
                    <li><a class="cool-link" href="#">Core</a></li>
                    <li><a class="cool-link" href="eventos.php">Eventos</a></li>
                    <li><a class="cool-link" href="blog.php">Blogs</a></li>
                    <li><a class="button-link" href="#">Conocenos</a></li>
                    <li><a class="button-link" href="">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>';
    }?>