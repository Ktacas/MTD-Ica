<?php 
    // incluimos inicialmente la conexiona la base de datos
    require "../config/Conexion.php";

    Class Categoria{
        // Implementamos nuestro constructor
        public function __construct(){

        }

        // Implementamos un metodo para insertar registros
        public function insertar($nombre, $descripcion){
            $sql="INSERT INTO categoria (nombre, descripcion, condicion)
                VALUES ('$nombre', '$descripcion', '1')";
            return ejecutarConsulta($sql);
        }

        // Implementamos un metodo para editar registros
        public function editar ($idcategoria, $nombre, $descripcion){
            $sql ="UPDATE categoria SET nombre='$nombre', descripcion='$descripcion'
                WHERE idcategoria = '$idcategoria'";
            return ejecutarConsulta($sql);
        }

        // Implementamos un metodo para desactivar categorias
        public function desactivar($idcategoria){
            $sql ="UPDATE categoria SET condicion='0' WHERE idcategoria = '$idcategoria'";
            return ejecutarConsulta($sql);
        }

        // Implementamos un metodo para activar categorias
        public function activar($idcategoria){
            $sql ="UPDATE categoria SET condicion='1' WHERE idcategoria = '$idcategoria'";
            return ejecutarConsulta($sql);
        }

        // Implementamos un metodo para mostrar los datos de un registro a modificar
        public function mostrar($idcategoria){
            $sql ="SELECT * FROM categoria WHERE idcategoria='$idcategoria'";
            return ejecutarConsultaSimpleFila($sql);
        }

        // Implementamos un metodo para listar los registros
        public function listar(){
            $sql ="SELECT * FROM categoria";
            return ejecutarConsulta($sql);
        }
    }
    
?>