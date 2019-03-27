<?php require 'header/doctype.php'; ?>
<link rel="stylesheet" href="../public/css/visualizacion_eventos.css">
<?php require 'header/title.php'; ?>
<?php require 'header.php'; ?>
<div class="admin_blog_container">
            <div class="button-new">
                <a href="admin.php">Admin</a>
                <a href="adminEc.php">Nuevo</a>
            </div> 
            <form>       
                <div id="adminB_section_tabla">
                    <?php require '../modelos/AdminEL.php'; ?>
                </div>
            </form>
        </div>
</div>
    
</body>
</html>
