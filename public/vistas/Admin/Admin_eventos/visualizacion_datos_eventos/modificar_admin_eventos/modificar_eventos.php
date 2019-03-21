<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css_admin_blog/index.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../../public/css/normalize.css">
    <link rel="stylesheet" href="../../../../../public/css/main_crear.css">
    
</head>

<body>

<header class="header">
        <!-- contenedor -->
        <div class="container_header">
                <!-- logo -->
                <figure class="logo">
                    <img src="../../../../../public/img/Blanco800x346.png" alt="logo">
                </figure>
                <!-- nav -->
                <nav class="menu">
                    <ul>
                        <li><a class="cool-link" href="../../../../principal/index.php">Inicio</a></li>
                        <li><a class="cool-link" href="../../../../Core/Index_core.php">Core</a></li>
                        <li><a class="cool-link" href="../../../../Eventos/Index_eventos.php">Eventos</a></li>
                        <li><a class="cool-link" href="../../../../Blog/Index_blog.php">Blogs</a></li>
                        <li><a class="button-link" href="#">Se miembro</a></li>
                    </ul>
                </nav>
            </div>
    </header>
    <?php 
        require '../../../../../config/Conexion_Ev.php';

        $id=$_REQUEST['ID_titulo'];
        $query = "SELECT * FROM `tbeventos` WHERE ID_titulo='$id'";
        
        $resultado= $conexion->query($query);
        
        $row = $resultado->fetch_assoc();
    ?>

<div id="admin_blog_container">
    
    <form action="proceso_modificar.php?ID_titulo=<?php echo $row['ID_titulo']; ?>" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
        <label>Titulo: <input type="text" REQUIRED name="titulo" placeholder="pon el titulo" value="<?php echo $row['Titulo']; ?>"></label> 
        
        <label>SubTitulo: <input type="text" REQUIRED name="subtitulo" placeholder="pon el subtitulo" value="<?php echo $row['Subtitulo']; ?>"></label> 
        
        <label>Fecha: <input type="date" REQUIRED name="fecha" value="<?php echo $row['Fecha']; ?>"></label> 
        
        <label>Hora: <input type="time" REQUIRED name="hora" value="<?php echo $row['Hora']; ?>"></label> <br>

        <img src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>" width="100" heigth="100" name="imagen" id="imagen">
        
        <label>Imagen: <input type="file" REQUIRED name="imagen"></label>
        
        <label>Descripcion: <textarea REQUIRED name="descripcion" rows="10" cols="80" placeholder="pon la descripcion aqui" maxlength="140"x><?php echo $row['Descripcion']; ?></textarea></label> <br>
        
        <label>Lugar: <input type="text" REQUIRED name="lugar" value="<?php echo $row['Lugar']; ?>" placeholder="pon lugar del evento"></label> 
        
        <label>Enlace Mapa: <input type="text" REQUIRED name="enlace" value="<?php echo $row['Enlace']; ?>" placeholder="pon los parametros del mapa"></label> 
        
        <label>Estado: <input type="text" REQUIRED name="estado" value="<?php echo $row['Estado']; ?>" placeholder="ACTIVO O FINALIZADO"></label> 

        <input type="submit" value="modificar" name="modificar">

        <a id href="../visualizar_eventos.php">Cancelar</a><br>
    </form>
<br>
    <hr>
</div>

</body>
</html> 