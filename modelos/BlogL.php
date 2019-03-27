<?php
    require '../config/Conexion_Bl.php';
            
    $por_pagina=4;
    
    if(isset($_GET['pagina'])){
        $pagina=$_GET['pagina'];
    }else{
        $pagina= 1;
    }
    
    $empieza=($pagina-1)*$por_pagina;
    
    $query = "SELECT ID_titulo, enlace, titulo, categoria, Year(fecha) ,Month(fecha), Day(fecha), descripcion FROM dtblog LIMIT $empieza, $por_pagina";
    
    $resultado= $conexion->query($query);
    
    while ($row = $resultado->fetch_assoc()){ ?>
        <article class="post-preview">
            <figure class="miniature-preview">
                <a href="blogseleccionado.php?ID_titulo=<?php echo $row['ID_titulo']; ?>">

                    <img src="https://img.youtube.com/vi/<?php echo $row['enlace'];?>/maxresdefault.jpg" alt="">
                </a>
            </figure> 
            <div class="content-preview">
                <a href="blogseleccionado.php?ID_titulo=<?php echo $row['ID_titulo']; ?>"><?php echo $row['categoria']; ?></a>
                <h2><?php echo $row['titulo']; ?></h2>
                <p>Publicado el&nbsp;<span><?php require 'FechaB.php'?></span></p>
                <p class="content-p"><?php echo $row['descripcion']; ?></p>
                <div class="others-preview">
                    <figure class="perfil-post">
                        <img src="../public/img/perfil_core2.jpg" alt="">
                    </figure>
                    <a class="name-perfil" href="#">Daniela Galindo Maldonado</a>
                    <div class="icon-preview">
                        <i class="far fa-heart"></i>
                        <span class="heart-number">23</span>
                        <i class="fas fa-comment"></i>
                        <span class="comment-number">12</span>
                    </div>
                </div>
            </div>
        </article> 
<?php } ?>
