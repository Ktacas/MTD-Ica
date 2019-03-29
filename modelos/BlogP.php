<?php
    require '../config/Conexion_MTD.php';

    $query2 = "SELECT * FROM dtblog";

    $resultado= $conexion->query($query2);

    $total_blogs=mysqli_num_rows($resultado);
    
    $total_paginas=ceil($total_blogs / $por_pagina);
?><?php 
    for ($i=1; $i <= $total_paginas; $i++){ ?>
        <li class="item-other"><a class="link-other" href="blog.php?pagina=<?php echo $i ?>"><?php echo $i ?></a></li>      
<?php } ?>