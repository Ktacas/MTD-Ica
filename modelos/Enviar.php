<?php 
// se necesita estar en hosting
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $mensaje="Contactenme Por favor, quiero saber más";

    $destinatario="cj_cfaw@outlook.es";
    $asunto="Contacto desde MTDpage";

    $carta="De: $nombre \n";
    $carta="Correo: $correo \n";
    $carta="Mensaje: $mensaje \n";

    mail($destinatario, $asunto, $carta);
    echo'<script type="text/javascript">
    alert("Tarea Guardada");
    window.location.href="index.php";
    </script>';
?>