<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../visualizacion_datos_eventos/css_admin_eventos/index.css">

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
<div id="admin_eventos_container">
    
    <form action="guardar_eventos.php" name="formenviar" id="formenviar" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
        <label>Titulo: <input type="text" REQUIRED name="titulo" placeholder="pon el titulo"></label> <br><br>
        <label>Fecha: <input type="date" REQUIRED name="fecha"></label> <br><br>
        <label>Imagen: <input type="file" REQUIRED name="imagen"></label><br><br>
        <label>Enlace: <input type="text" REQUIRED name="enlace" placeholder="pon el id del enlace"></label> <br><br>
        <label>Categoria: <select name="categoria"><option>C#</option><option>Xamarin</option><option>MTDeveloper</option></select> <br><br>
        <label>Descripcion: <textarea REQUIRED name="descripcion" rows="5" cols="40" placeholder="pon la descripcion aqui" maxlength="140"></textarea></label><br><br>
        
        <input type="submit" value="enviar" name="enviar">

        <a href="../visualizacion_datos_eventos/visualizar_eventos.php">Carcelar</a><br>
        
        <!-- https://img.youtube.com/vi/"ID del video aqui"/hq2.jpg -->

        <label>Contenido: <textarea REQUIRED name="contenido" rows="25" cols="100" placeholder="Coloca el contenido" maxlength="1100"x></textarea></label><br><br>
    </form>
<br>
    


</div>

</body>
</html> 
