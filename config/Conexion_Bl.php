<?Php 
    require_once "global.php";

    $conexion=new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME_Bl);

    mysqli_query($conexion, 'SET NAMES "'.DB_ENCODE.'"');

    //  si tenemos un posible error en la conexion lo mostramos
    
    if(mysqli_connect_errno()){
        printf("Fallo la conexión a la base de datos: %s",mysqli_connect_errno());
        exit();
    }
?>