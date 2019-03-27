<?php require 'header/doctype.php'; ?>
<link rel="stylesheet" href="../public/css/main_crear.css">
<?php require 'header/title.php'; ?>
<?php require 'header.php'; ?>

<div id="admin_blog_container"> 
    <form action="../modelos/AdminBc.php" name="formenviar" id="formenviar" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
        <label>Titulo: <input type="text" REQUIRED name="titulo" placeholder="Escribe el título"></label> 
        <label>Fecha: <input type="date" REQUIRED name="fecha"></label> 
        <label>Enlace: <input type="text" REQUIRED name="enlace" placeholder="Introduce el ID"></label> 
        <label>Categoria: <select name="categoria"><option>Office 365</option><option>Xamarin</option><option>Azure</option></select></label> 
        <div class="description">
        <label class="description" >Descripcion: </label>
            <textarea REQUIRED name="descripcion" rows="5" cols="40" placeholder="Descripción aqui" maxlength="140"></textarea> 
        </div>
        <div class="container_content">
            <label>Contenido:</label>
            <textarea REQUIRED name="contenido" rows="25" cols="100" placeholder="Coloca el contenido" maxlength="1100"x></textarea>
        </div>
        <div class="container">
            <input type="submit" value="enviar" name="enviar">
            <a href="adminB.php">Carcelar</a>
        </div>
    </form>
</div>