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
        <label>SubTitulo: <input type="text" REQUIRED name="subtitulo" placeholder="pon el subtitulo"></label> <br><br>
        <label>Fecha: <input type="date" REQUIRED name="fecha"></label> <br><br>
        <label>Hora: <input type="time" REQUIRED name="hora"></label> <br><br>
        <label>Imagen: <input type="file" REQUIRED name="imagen" stile="display: none"></label> <span style="Color: Red;">Tamaño Máximo: 2,048KB</span> <br><br>
        <label>Descripcion: <textarea REQUIRED name="descripcion" rows="5" cols="40" placeholder="pon la descripcion aqui" maxlength="140"></textarea></label><br><br>
        <label>Lugar: <input type="text" REQUIRED name="lugar" placeholder="pon lugar del evento"></label> <br><br>
        <label>Enlace Mapa: <input type="text" REQUIRED name="enlace" placeholder="pon los parametros del mapa"></label> <br><br>
        <label>Estado: <input type="text" REQUIRED name="estado" placeholder="ACTIVO O FINALIZADO"></label> <br><br>
        
        <input type="submit" value="enviar" name="enviar">

        <a href="../visualizacion_datos_eventos/visualizar_eventos.php">Carcelar</a><br>
    </form>
<br>
    
</div>

</body>
</html> 
