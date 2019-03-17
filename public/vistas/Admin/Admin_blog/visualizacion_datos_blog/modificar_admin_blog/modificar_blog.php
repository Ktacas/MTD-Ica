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
    <link rel="stylesheet" href="../../../../../css/normalize.css">
    <link rel="stylesheet" href="../../../../../css/main_crear.css">
    
</head>

<body>

<header class="header">
        <!-- contenedor -->
        <div class="container_header">
                <!-- logo -->
                <figure class="logo">
                    <img src="../../../../../img/Blanco800x346.png" alt="logo">
                </figure>
                <!-- nav -->
                <nav class="menu">
                    <ul>
                        <li><a class="cool-link" href="../../principal/index.php">Inicio</a></li>
                        <li><a class="cool-link" href="../../Core/Index_core.php">Core</a></li>
                        <li><a class="cool-link" href="../../Eventos/Index_eventos.php">Eventos</a></li>
                        <li><a class="cool-link" href="../../Blog/Index_blog.php">Blogs</a></li>
                        <li><a class="button-link" href="#">Se miembro</a></li>
                    </ul>
                </nav>
            </div>
    </header>    
    <?php 
        include '../../conexion_db_blog.php';

        $id=$_REQUEST['ID_titulo'];
        $query = "SELECT * FROM dtblog WHERE ID_titulo='$id'";
        
        $resultado= $conexion->query($query);
        
        $row = $resultado->fetch_assoc();
    ?>

<div id="admin_blog_container">
    
    <form action="proceso_modificar.php?ID_titulo=<?php echo $row['ID_titulo']; ?>" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
        <label>Titulo: <input type="text" REQUIRED name="titulo" placeholder="pon el titulo" value="<?php echo $row['titulo']; ?>"></label>
        <label>Fecha: <input type="date" REQUIRED name="fecha" value="<?php echo $row['fecha']; ?>"></label>
        <label>Enlace: <input type="text" REQUIRED name="enlace" placeholder="Introduce el ID" value="<?php echo $row['enlace']; ?>"></label> 
        <img src="https://img.youtube.com/vi/<?php echo $row['enlace'];?>/mqdefault.jpg" width="100" heigth="100" name="imagen" id="imagen">
        
        <label>Categoria: <select name="categoria">
            <?php 
                if( $row['categoria'] == $valor='C#'){?> 
                    <option selected>C#</option><option>Xamarin</option><option>MTDeveloper</option> 
            <?php }
                if( $row['categoria'] == $valor='Xamarin'){?> 
                    <option>C#</option><option selected>Xamarin</option><option>MTDeveloper</option>
            <?php }
                if( $row['categoria'] == $valor='MTDeveloper'){?> 
                    <option>C#</option><option>Xamarin</option><option selected>MTDeveloper</option>
            <?php }
            ?>
            </select> <br>

            <label>Descripcion: <textarea REQUIRED name="descripcion" rows="5" cols="40" placeholder="pon la descripcion aqui" maxlength="140"x><?php echo $row['descripcion']; ?></textarea></label> <br>
        
        
        <input type="submit" value="modificar" name="modificar">

        <a href="../visualizar_blog.php">Cancelar</a><br>

        <div class="container_content">
            <label>Contenido:</label>
            <textarea REQUIRED name="contenido" rows="25" cols="100" placeholder="Coloca el contenido" maxlength="1100"x></textarea>
        </div>
    </form>
<br>
    <hr>
</div>

</body>
</html> 