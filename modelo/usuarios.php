<?php
    
    class usuarios{
        
        private $nombre;
        private $email;
        private $contraseña;
        private $tipo;


        public function __construct($nombre,$email,$contraseña,$tipo){
            $this->nombre=$nombre;
            $this->email=$email;
            $this->contraseña=$contraseña;
            $this->tipo=$tipo;
        }

        public function __toString(){
            return $this->nombre;
        }

        public function getNombre(){
            return $this->nombre;
           
        }

        public function getEmail(){
            return $this->email;
        }

        public function getContra(){
            return $this->contraseña;
        }

        public function getTipo(){
            return $this->tipo;
        }

        /*
        public function setNombre(){
            
        }

        public function setCorreo(){
            
        }

        public function setContraseña(){
            
        }

        public function setTipo(){
           
        }
        */

       // ADAPTER PATTERN

        public function setUsuarioNuevo(){
            if ($this->tipo=="Cliente") {
                return $this->setCliente();
            } else {
                return $this->setEmpleado();
            }
        }

        protected function setCliente() {
            $sentencia = Conexion::getInstancia()->prepare("INSERT INTO usuarios(nombre,email,contraseña,tipo)VALUES(?,?,?,'Cliente')");
            $sentencia->bindParam(1,$this->nombre);
            $sentencia->bindParam(2,$this->email);
            $sentencia->bindParam(3,$this->contraseña);
            // $sentencia->bindParam(4,$this->tipo);
            $sentencia->execute();
        }

        protected function setEmpleado() {
            $sentencia = Conexion::getInstancia()->prepare("INSERT INTO usuarios(nombre,email,contraseña,tipo)VALUES(?,?,?,'Empleado')");
            $sentencia->bindParam(1,$this->nombre);
            $sentencia->bindParam(2,$this->email);
            $sentencia->bindParam(3,$this->contraseña);
            // $sentencia->bindParam(4,$this->tipo);
            $sentencia->execute();
        }

        // FIN ADAPTER PATTERN

        public function delUsuario(){
            $sentencia = Conexion::getInstancia()->prepare("DELETE FROM usuarios WHERE email = ?");
            $response = $sentencia->execute(array($this->correo));
            $sentencia->execute();
        }
        
        public function setIniciarSesion(){
            $sql='SELECT * FROM supermercado.usuarios where email=:email AND contraseña=:contra';
            $sentencia=Conexion::getInstancia()->prepare($sql);
            $sentencia->bindValue(":email",$this->email);
            $sentencia->bindValue(":contra",$this->contraseña);
            $sentencia->execute();
            foreach( $sentencia as $row){
                $row[0];
                $row[1];
                $row[2];
                $tipo=$row[3];
            }
            if($tipo==="Cliente"){
                //echo "eres clientes";
                header("location:../vista/cliente.php");
            }elseif($tipo==="Empleado"){
                //echo "eres empleao";
                header("location:../vista/empleados.php");
            }else{
                header("location:../vista/mensajeerroneoindex.php");
            }
        } 

        
    }
?>