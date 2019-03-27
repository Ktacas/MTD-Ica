<?php require 'header/doctype.php'; ?>
<link rel="stylesheet" href="../public/css/main_crear.css">
<?php require 'header/title.php'; ?>
<?php require 'header.php'; ?>

<?php require '../modelos/AdminBed.php' ?>

<div id="admin_blog_container">
    
    <form action="../modelos/AdminBmd.php?ID_titulo=<?php echo $row['ID_titulo']; ?>" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
        <label>Titulo: <input type="text" REQUIRED name="titulo" placeholder="pon el titulo" value="<?php echo $row['titulo']; ?>"></label>
        <label>Fecha: <input type="date" REQUIRED name="fecha" value="<?php echo $row['fecha']; ?>"></label>
        <label>Enlace: <input type="text" REQUIRED name="enlace" placeholder="Introduce el ID" value="<?php echo $row['enlace']; ?>"></label> 
        <img src="https://img.youtube.com/vi/<?php echo $row['enlace'];?>/mqdefault.jpg" width="100" heigth="100" name="imagen" id="imagen">
        
        <label>Categoria: <select name="categoria">
            <?php 
                if( $row['categoria'] == $valor='Office 365'){?> 
                    <option selected>Office 365</option><option>Xamarin</option><option>Azure</option> 
            <?php }
                if( $row['categoria'] == $valor='Xamarin'){?> 
                    <option>Office 365</option><option selected>Xamarin</option><option>Azure</option>
            <?php }
                if( $row['categoria'] == $valor='Azure'){?> 
                    <option>Office 365</option><option>Xamarin</option><option selected>Azure</option>
            <?php }
            ?>
            </select> <br>

            <label>Descripcion: <textarea REQUIRED name="descripcion" rows="5" cols="40" placeholder="pon la descripcion aqui" maxlength="140"x><?php echo $row['descripcion']; ?></textarea></label> <br>
        
        
        <input type="submit" value="modificar" name="modificar">

        <a href="adminB.php">Cancelar</a><br>

        <div class="container_content">
            <label>Contenido:</label>
            <textarea REQUIRED name="contenido" rows="25" cols="100" placeholder="Coloca el contenido" maxlength="1100"x><?php echo $row['contenido']; ?></textarea>
        </div>
    </form>
</div>