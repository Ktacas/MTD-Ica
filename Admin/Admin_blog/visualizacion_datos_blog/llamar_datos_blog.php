<?php
    include '../conexion_db_blog.php';

    $query = "SELECT * FROM dtblog";

    $resultado= $conexion->query($query);

    while ($row = $resultado->fetch_assoc()){
 ?>
    <table>
                <tr>
                    <th rowspan="5"><?php echo $row['ID_titulo']; ?></th>
                </tr>

                <tr>
                    <th colspan="4"><?php echo $row['titulo']; ?></th>
                </tr>
    
                <tr>
                    <th>IMAGEN</th>
                    <th>DESCRIPCION</th> 
                    <th colspan="2"></th>
                </tr>
    
                <tr>
                    <td rowspan="2">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" width="100" heigth="100" name="imagenv" id="imagenv">
                    </td>
                    <td rowspan="2">
                        <p name="descripcion" id="descripcion"><?php echo $row['descripcion']; ?></p>
                    </td>
                    <td colspan="2">
                        <input type="button" value="visualizar" id="adminB_button" name="AB_visualizar" >
                    </td>
                </tr>
    
                <tr>
                    <td>
                        <a id="btn_editar" href="modificar_admin_blog/modificar_blog.php?ID_titulo=<?php echo $row['ID_titulo']; ?>">Editar</a>
                    </td>
    
                    <td>
                    <a id="btn_eliminar" href="eliminar_admin_blog/eliminar_blog.php?ID_titulo=<?php echo $row['ID_titulo']; ?>">Eliminar</a>                        
                    </td>
                </tr>
            </table>
 <?php
    }
 ?>