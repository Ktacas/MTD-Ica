<?php
    require '../../../../config/Conexion_Ev.php';

    $query = "SELECT * FROM `tbeventos`";

    $resultado= $conexion->query($query);

    while ($row = $resultado->fetch_assoc()){
 ?>
    <table>
                <tr>
                    <th rowspan="5"><?php echo $row['ID_titulo']; ?></th>
                </tr>

                <tr>
                    <th colspan="4"><?php echo $row['Titulo']; ?></th>
                </tr>
    
                <tr>
                    <th>IMAGEN</th>
                    <th>DESCRIPCION</th> 
                    <th colspan="2"></th>
                </tr>
    
                <tr>
                    <td rowspan="2">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>" width="100" heigth="100" name="imagenv" id="imagenv">
                    </td>
                    <td rowspan="2">
                        <p name="descripcion" id="descripcion"><?php echo $row['Descripcion']; ?></p>
                    </td>
                    <td colspan="2" class="container-button">
                        <a id="btn_editar" name="AB_visualizar" href="../../../Eventos/eventos.php?ID_titulo=<?php echo $row['ID_titulo']; ?>">Visualizar</a>
                    </td>
                </tr>
    
                <tr>
                    <td>
                        <a id="btn_editar" href="modificar_admin_eventos/modificar_eventos.php?ID_titulo=<?php echo $row['ID_titulo']; ?>">Editar</a>
                    </td>
    
                    <td>
                    <a id="btn_eliminar" href="eliminar_admin_eventos/eliminar_eventos.php?ID_titulo=<?php echo $row['ID_titulo']; ?>">Eliminar</a>                        
                    </td>
                </tr>
            </table>
 <?php
    }
 ?>