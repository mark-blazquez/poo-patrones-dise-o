<?php 
    class  Conexion{
		//conexion dependiente del patron singleton
		//datos conexion modo local
		/*private $tipo_de_base = 'mysql';
		private $nombre_de_base = 'supermercado';
		private $host = 'localhost';
		private $usuario = 'root';
		private $contrasena = '';
		//datos conexion host*/
		private $tipo_de_base = 'mysql';
		private $nombre_de_base = 'supermercado';
		private $host = 'localhost:3306';
		private $usuario = 'usuario';
		private $contrasena = 'Usuario@1111';

		private static $instancia = null;
		//construct de la conexion
		private function __construct() {
			try {
				self::$instancia = new PDO("{$this->tipo_de_base}:dbname={$this->nombre_de_base};host={$this->host};charset=utf8", $this->usuario, $this->contrasena);
			} catch (PDOException $e) {
				echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
				// exit;
			}
		}
		//funcion que obtiene la conexion , si no la hay la crea
		public static function getInstancia(){
			if(!self::$instancia){
				new self();
			}
			return self::$instancia;
		}
		//funcion que cierra la conexion ,dejandola a nulo
		public static function cerrar(){
			self::$instancia = null;
		}	
	}
?>