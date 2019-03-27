<?php require 'header/doctype.php'; ?>
<link rel="stylesheet" href="../public/css/main_crear.css">
<?php require 'header/title.php'; ?>
<?php require 'header.php'; ?>

<div id="admin_blog_container">
    <form action="../modelos/AdminEc.php" name="formenviar" id="formenviar" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
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
        <a href="adminE.php">Cancelar</a>
        </div>
    </form>
</div>