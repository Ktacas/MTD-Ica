<?php 
echo $row['Day(fecha)'];

echo ' de '; 

switch($row['Month(fecha)']){
    case '1':
        echo 'Enero';
    break;

    case '2':
        echo 'Febrero';
    break;

    case '3':
        echo 'Marzo';
    break; 

    case '4':
        echo 'Abril';
    break;

    case '5':
        echo 'Mayo';
    break;

    case '6':
        echo 'Junio';
    break;

    case '7':
        echo 'Julio';
    break;

    case '8':
        echo 'Agosto';
    break;

    case '9':
        echo 'Setiembre';
    break;
    
    case '10':
        echo 'Octubre';
    break;
    case '11':
        echo 'Noviembre';
    break;
    case '12':
        echo 'Diciembre';
    break;
}
echo ' del '; 
echo $row['Year(fecha)'];
?>
