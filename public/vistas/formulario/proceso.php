<?php

include("conexion.php");


$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telefono'];
$Direccion = $_POST['Direccion'];
$Edad = $_POST['Edad'];
$Universidad = $_POST['Universidad'];
$Comentario = $_POST['Comentario'];


$query = "INSERT INTO Db_Registro_Evento(Nombre_Participante,Email_Participante,Telefono_Participante,
Direccion_Participante,Edad_Participante,Universidad_Participante,Comentarios_Participante) 
VALUES('$Nombre','$Email','$Telefono','$Direccion','$Edad','$Universidad','$Comentario')";

$resultado = $conexion->query($query);

if($resultado){
    header("location:../login/logo.html");

}else{
    echo "Fallo el registro, registrese nuevamente";
}
?>