<?php require 'header/doctype.php'; ?>
<link rel="stylesheet" href="../public/css/visualizacion_blog.css">
<?php require 'header/title.php'; ?>
<?php require 'header.php'; ?>

<div class="admin_blog_container">
            <div class="button-new">
                <a href="admin">Admin</a>
                <a href="adminBc">Nuevo</a>
            </div>
            <form>        
                <div id="adminB_section_tabla">
                    <?php require '../modelos/AdminBL.php'; ?>
                </div>
            </form>
        </div>
    </div>
</body>
</html>