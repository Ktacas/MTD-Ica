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
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="../../../../css/normalize.css">
    <link rel="stylesheet" href="css_admin_eventos/visualizacion_eventos.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <!-- contenedor -->
            <div class="container_header">
                    <!-- logo -->
                    <figure class="logo">
                        <img src="../../../../img/Blanco800x346.png" alt="logo">
                    </figure>
                    <!-- nav -->
                    <nav class="menu">
                        <ul>
                            <li><a class="cool-link" href="../../../principal/index.php">Inicio</a></li>
                            <li><a class="cool-link" href="../../../Core/Index_core.php">Core</a></li>
                            <li><a class="cool-link" href="../../../Eventos/Index_eventos.php">Eventos</a></li>
                            <li><a class="cool-link" href="../../../Blog/Index_blog.php">Blogs</a></li>
                            <li><a href="../../../../../admin/index.php">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			            <li><a href="../../vistas/principal/index.php"> Cerrar Sesión </a></li>
                        </ul>
                    </nav>
            </div>
        </header> 

        <div class="admin_blog_container">
            <div class="button-new">
                <a href="../enviar_datos_eventos/admin_eventos_crear.php">Nuevo</a>
            </div> 
            <form>       
                <div id="adminB_section_tabla">
                    <?php include 'llamar_datos_eventos.php'; ?>
                </div>
            </form>
        </div>
</div>
    
</body>
</html>