<?php
class Super {
    private $nombre;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function __toString() {
        return $this->nombre;
    }
     
    public function getNombre() {
        return $this->nombre;
    }

    public function obtenerProductos(){
        $sentencia=Conexion::getInstancia()->prepare("SELECT `urlimagen`,`nombre`,`tipo` FROM `productos`");
		$sentencia->execute();
		foreach ($sentencia as $producto) { 
			$url = $producto[0];
			$nombre = $producto[1];
            $tipo = $producto[2];
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
				<div class="card h-100">
					<img class="card-img-top" width="500" height="300px;" src="<?php echo $url;?>" alt="">
					<div class="card-body">
					<h4 class="card-title">
					<h3><?php echo $nombre;?></h3>
					</h4>
				</div>
			        <div class="card-footer">
					    <small class="text-muted"><?php echo $tipo;?></small>
				    </div>
			    </div>
			</div>
			<?php 
        }
    }
    public function obtenerProductosClientes(){
        $sentencia=Conexion::getInstancia()->prepare("SELECT `urlimagen`,`nombre`,`precio`,`tipo` FROM `productos`");
		$sentencia->execute();
		foreach ($sentencia as $producto) { 
			$url = $producto[0];
			$nombre = $producto[1];
			$precio = $producto[2];
            $tipo = $producto[3];
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
				<div class="card h-100">
					<img class="card-img-top" width="500" height="300px" src="<?php echo $url;?>" alt="">
					<div class="card-body">
						<h4 class="card-title justify-content-center">
							<h3><?php echo $nombre;?></h3>
						</h4>
						<h5 class="card-text">Precio: <?php echo $precio?>€</h5>
						<p class="text-muted">Tipo: <?php echo $tipo;?></p>
					</div>
				</div>
            </div>
            <?php
        
        }
    }

}

?>