<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css_admin_blog/index.css">

    <style>
        #admin_blog_container a{
            text-decoration: none;
            color: rgb(0, 0, 0);
            width: 30px;
            height: auto;
            padding: 1px;
            margin: 1px;
            background-color:rgb(148, 137, 137);
            border-style: solid;
            border-color: rgb(116, 111, 111);
            border-radius: 10%;
        }
    </style>
</head>

<body>
    <?php 
        include '../../../conexion_db_blog.php';

        $id=$_REQUEST['ID_titulo'];
        $query = "SELECT * FROM dtblog WHERE ID_titulo='$id'";
        
        $resultado= $conexion->query($query);
        
        $row = $resultado->fetch_assoc();
    ?>

<div id="admin_blog_container">
    
    <form action="proceso_modificar.php?ID_titulo=<?php echo $row['ID_titulo']; ?>" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
        <label>Titulo: <input type="text" REQUIRED name="titulo" placeholder="pon el titulo" value="<?php echo $row['titulo']; ?>"></label> <br><br>
        
        <label>Fecha: <input type="date" REQUIRED name="fecha" value="<?php echo $row['fecha']; ?>"></label> <br><br>
        
        <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" width="100" heigth="100" name="imagen" id="imagen">
        
        <label>Imagen: <input type="file" REQUIRED name="imagen"></label><br><br>
        
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
            </select> <br><br>
        
        <label>Descripcion: <textarea REQUIRED name="descripcion" rows="5" cols="40" placeholder="pon la descripcion aqui" maxlength="140"x><?php echo $row['descripcion']; ?></textarea></label><br><br>
        
        <input type="submit" value="modificar" name="modificar">

        <a id href="visualizar_eventos.php">Cancelar</a><br>
    </form>
<br>
    <hr>
</div>

</body>
</html> 