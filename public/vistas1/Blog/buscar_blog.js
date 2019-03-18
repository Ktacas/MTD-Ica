$(buscar_datos());

let buscar_datos =(buscar) => {
    $.ajax({
        url:'App/buscar_blog.php',
        type: 'POST',
        dataType: 'php',
        data: {buscar:buscar},
    })
    .done(function(conexion){
        $("#datos").php(conexion);
    })
    .fail(function(){
        console.log("error");
    })
}