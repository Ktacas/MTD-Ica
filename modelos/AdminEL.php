<?php
    require '../config/Conexion_MTD.php';

    $query = "SELECT * FROM `tbeventos`";

    $resultado= $conexion->query($query);

    while ($row = $resultado->fetch_assoc()){
 ?>
    <table>
                <tr>
                    <th class="num" rowspan="5"><?php echo $row['ID_titulo']; ?></th>
                </tr>
                <tr class="title">
                    <th colspan="4"><?php echo $row['Titulo']; ?></th>
                </tr>
    
                <tr class="sections">
                    <th>IMAGEN</th>
                    <th>DESCRIPCION</th> 
                    <th colspan="2"></th>
                </tr>
    
                <tr class="content">
                    <td rowspan="2">
                        <figure class="image">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($row["Imagen"]); ?>" width="100" heigth="100" name="imagenv" id="imagenv">
                        </figure>
                    </td>
                    <td rowspan="2">
                        <p name="descripcion" id="descripcion"><?php echo $row['Descripcion']; ?></p>
                    </td>
                    <td colspan="2" class="container-button">
                        <a id="btn_editar1" name="AB_visualizar" href="eventoseleccionado.php?ID_titulo=<?php echo $row['ID_titulo']; ?>">Visualizar</a>
                    </td>
                </tr>
    
                <tr class="buttons">
                    <td>
                        <a id="btn_editar" href="adminEed.php?ID_titulo=<?php echo $row['ID_titulo']; ?>">Editar</a>
                    </td>
    
                    <td>
                    <a id="btn_eliminar" href="../modelos/AdminEel.php?ID_titulo=<?php echo $row['ID_titulo']; ?>">Eliminar</a>                        
                    </td>
                </tr>
            </table>
 <?php
    }
 ?>