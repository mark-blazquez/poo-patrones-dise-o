<?php

    class productos{
        private $urlimagen;
        private $nombre;
        private $precio;
        private $tipo;

        public function __construct($urlimagen,$nombre,$precio,$tipo){
            $this->urlimagen=$urlimagen;
            $this->nombre=$nombre;
            $this->precio=$precio;
            $this->tipo=$tipo;
        }

        public function __toString(){
            return  $this->nombre;
        }

        public function getUrlImagen(){
            return  $this->urlimagen;
        }

        public function getNombre(){
            return  $this->nombre;
        }
            
        public function getPrecio(){
            return  $this->precio;
        }

        public function getTipo(){
            return  $this->tipo;
        }
        
        /*public function setUrlImagen(){
            
        }

        public function setNombre(){
            
        }

        public function setPrecio(){
           
        }

        public function setTipo(){
            
        }*/

        public function setProductoNuevo(){
            $sentencia = Conexion::getInstancia()->prepare("INSERT INTO productos(urlimagen,nombre,precio,tipo)VALUES(?,?,?,?)");
            $sentencia->bindParam(1,$this->urlimagen);
            $sentencia->bindParam(2,$this->nombre);
            $sentencia->bindParam(3,$this->precio);
            $sentencia->bindParam(4,$this->tipo);
            $sentencia->execute();
        }

        
        public function delProducto(){
            $sentencia = Conexion::getInstancia()->prepare("DELETE FROM productos WHERE nombre = ?");
            $response = $sentencia->execute(array($this->nombre));
            $sentencia->execute();
        }
        

         


    }

?>