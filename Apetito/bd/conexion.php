<?php
    class conexion{
        private $servidor='localhost';
        private $usuario='root';
        private $password='';
        private $nombre="apetito";

        public function __construct(){
            try{
                $this->conexion=new PDO("mysql:host=$this->servidor;port=3307;dbname=$this->nombre", $this->usuario,$this->password );
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);            
            }catch(PDOException $error){
                echo "No se establecio conexion".$error;
            }
        }

        public function ejecutar($sql){
            $this->conexion->exec($sql);
            return $this->conexion->lastInsertId();
        }

        public function consultar($sql){
            $sentencia=$this->conexion->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll();
        }
        
        public function IdProducto($IdArray = null, $key = "id_Producto"){
            if ($IdArray != null){
                $idcarrito = array_map(function ($value) use($key){
                    return $value[$key];
                }, $IdArray);
                return $idcarrito;
            }
        }
    }
?>