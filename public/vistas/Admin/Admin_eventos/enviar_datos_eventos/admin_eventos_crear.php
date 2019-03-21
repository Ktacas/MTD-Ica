<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../public/css/normalize.css">
    <link rel="stylesheet" href="../../../../public/css/main_crear.css">
</head>
<body>
<header class="header">
        <!-- contenedor -->
        <div class="container_header">
                <!-- logo -->
                <figure class="logo">
                    <img src="../../../../public/img/Blanco800x346.png" alt="logo">
                </figure>
                <!-- nav -->
                <nav class="menu">
                    <ul>
                        <li><a class="cool-link" href="../../../Principal/index.php">Inicio</a></li>
                        <li><a class="cool-link" href="../../../Core/Index_core.php">Core</a></li>
                        <li><a class="cool-link" href="../../../Eventos/Index_eventos.php">Eventos</a></li>
                        <li><a class="cool-link" href="../../../Blog/Index_blog.php">Blogs</a></li>
                        <li><a class="button-link" href="#">Se miembro</a></li>
                    </ul>
                </nav>
            </div>
    </header>    
    
<div id="admin_blog_container">
    <form action="guardar_eventos.php" name="formenviar" id="formenviar" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
        <label>Titulo: <input type="text" REQUIRED name="titulo" placeholder="Escribe el título"></label> 
        <label>SubTitulo: <input type="text" REQUIRED name="subtitulo" placeholder="Aqui subtítulo"></label> 
        <label>Fecha: <input type="date" REQUIRED name="fecha"></label> 
        <label>Hora: <input type="time" REQUIRED name="hora"></label> 
        <label>Imagen: <input type="file" REQUIRED name="imagen" stile="display: none"></label> <span style="Color: Red;">Tamaño Máximo: 2,048KB</span>
        <div class="description">
        <label class="description" >Descripcion: </label>
            <textarea REQUIRED name="descripcion" rows="5" cols="40" placeholder="Descripción aqui" maxlength="140"></textarea> 
        </div>
        <label>Lugar: <input type="text" REQUIRED name="lugar" placeholder="Lugar del evento"></label> 
        <label>Enlace Mapa: <input type="text" REQUIRED name="enlace" placeholder="Link de google maps"></label> 
        <label>Estado: <input type="text" REQUIRED name="estado" placeholder="ACTIVO O FINALIZADO"></label> 
        <div class="container">
        <input type="submit" value="Enviar" name="enviar">
        <a href="../visualizacion_datos_eventos/visualizar_eventos.php">Cancelar</a>
        </div>
    </form>
<br>
    
</div>

</body>
</html> 
