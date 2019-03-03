<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css_admin_blog/visualizacion_blog.css">
</head>
<body>
<div class="admin_blog_container">
    <form>        
        <div id="adminB_section_tabla">
            <a id="btn_nuevo" href="../enviar_datos_blog/admin_blog_crear.php">NUevo</a>
            <?php include 'llamar_datos_blog.php'; ?>
        </div>
    </form>
</div>
    
</body>
</html>