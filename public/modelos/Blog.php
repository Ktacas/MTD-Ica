<?php 
    // incluimos inicialmente la conexiona la base de datos
    require "../config/Conexion_Bl.php";

    Class Blog{
        // Implementamos nuestro constructor
        public function __construct(){

        }

        // Implementamos un metodo para insertar registros
        public function insertar($titulo, $fecha, $categoria, $descripcion, $contenido, $enlace){
            $sql="INSERT INTO dtBlog(titulo, fecha, categoria, descripcion, contenido, enlace) 
                    VALUES('$titulo', '$fecha', '$categoria', '$descripcion', '$contenido', '$enlace')";
            return ejecutarConsulta($sql);
        }

        // Implementamos un metodo para editar registros
        public function editar ($idblog, $titulo, $fecha, $categoria, $descripcion, $contenido, $enlace){
            $sql ="UPDATE dtBlog SET titulo='$titulo', fecha='$fecha', categoria='$categoria', descripcion='$descripcion', contenido='$contenido', enlace='$enlace'
                        WHERE ID_titulo ='$idblog'";
            return ejecutarConsulta($sql);
        }

        // Implementamos un metodo para mostrar los datos de un registro a modificar
        public function mostrar($idblog){
            $sql ="SELECT * FROM dtblog WHERE ID_titulo='$idblog'";
            return ejecutarConsultaSimpleFila($sql);
        }

        // Implementamos un metodo para listar los registros
        public function listar(){
            $sql ="SELECT * FROM dtblog";
            return ejecutarConsulta($sql);
        }
    }
    
?>