<?php require 'header/doctype.php'; ?>
<link rel="stylesheet" href="../public/css/main_crear.css">
<?php require 'header/title.php'; ?>
<?php require 'header.php'; ?>

<?php require '../modelos/AdminEed.php' ?>

<div id="admin_blog_container">
    <form action="../modelos/AdminEmd.php?ID_titulo=<?php echo $row['ID_titulo']; ?>" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
        <label>Titulo: <input type="text" REQUIRED name="titulo" placeholder="pon el titulo" value="<?php echo $row['Titulo']; ?>"></label> 
        
        <label>SubTitulo: <input type="text" REQUIRED name="subtitulo" placeholder="pon el subtitulo" value="<?php echo $row['Subtitulo']; ?>"></label> 
        
        <label>Fecha: <input type="date" REQUIRED name="fecha" value="<?php echo $row['Fecha']; ?>"></label> 
        
        <label>Hora: <input type="time" REQUIRED name="hora" value="<?php echo $row['Hora']; ?>"></label> <br>

        <img src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>" width="100" heigth="100" name="imagen" id="imagen">
        
        <label>Imagen: <input type="file" REQUIRED name="imagen"></label>
        
        <label>Nivel de Imagen: 
            <select name="nivel" id=nivel>
                <?php 
                    if( $row['Nivel'] == $valor='level-1'){?> 
                        <option selected>level-1</option><option>level-2</option><option>level-3</option> 
                <?php }
                    if( $row['Nivel'] == $valor='level-2'){?> 
                        <option>level-1</option><option selected>level-2</option><option>level-3</option>
                <?php }
                    if( $row['Nivel'] == $valor='level-3'){?> 
                        <option>level-1</option><option>level-2</option><option selected>level-3</option>
                <?php }
                ?>                          
            </select>
        </label> <br>

        <label>Descripcion: <textarea REQUIRED name="descripcion" rows="10" cols="80" placeholder="pon la descripcion aqui" maxlength="140"x><?php echo $row['Descripcion']; ?></textarea></label> <br>
        
        <label>Lugar: <input type="text" REQUIRED name="lugar" value="<?php echo $row['Lugar']; ?>" placeholder="pon lugar del evento"></label> 
        
        <label>Enlace Mapa: <input type="text" REQUIRED name="enlace" value="<?php echo $row['Enlace']; ?>" placeholder="pon los parametros del mapa"></label> 
        
        <label>Estado: <input type="text" REQUIRED name="estado" value="<?php echo $row['Estado']; ?>" placeholder="ACTIVO O FINALIZADO"></label> 

        <input type="submit" value="modificar" name="modificar">

        <a href="adminE.php">Cancelar</a><br>
    </form>
</div>