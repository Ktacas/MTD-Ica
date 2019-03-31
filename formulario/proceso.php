<?php

include("../config/Conexion_MTD.php");


$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telefono'];
$Direccion = $_POST['Direccion'];
$Edad = $_POST['Edad'];
$Universidad = $_POST['Universidad'];
$Comentario = $_POST['Comentario'];
$id=$_POST['id'];

$query = "INSERT INTO Db_Registro_Evento(Nombre_Participante,Email_Participante,Telefono_Participante,
Direccion_Participante,Edad_Participante,Universidad_Participante,Comentarios_Participante,Evento) 
VALUES('$Nombre','$Email','$Telefono','$Direccion','$Edad','$Universidad','$Comentario','$id')";

$resultado = $conexion->query($query);

if($resultado){
    header("location:logo.php");

}else{
    echo "Fallo el registro, registrese nuevamente";
}
?>