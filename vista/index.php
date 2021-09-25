<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'?>

<?php 
require '../modelo/Super.php';
require '../modelo/conexion.php';
require '../modelo/productos.php';
?>

<body>
	<!-- Navigation -->
	<?php include ('headerJ.php')?>
	<!-- Page Content -->
	<div class="container">
		<div id="index" class="elemento_menu visible">
			<?php require 'inicio.php'?>
		</div>
		<!-- Productos --><br>
		<div id="productos" class="row elemento_menu oculto">
			<div class="col-lg-12">
				<h1>Productos</h1>
				<div class="row" id="comida">
					<!--selecciono los datos de los productos-->
					<?php
					$super=new Super("asir");
					$super->obtenerProductos();
					?>
				</div>
			</div><br>
		</div>

		<div id="register" class="elemento_menu oculto">
			<div class="row">
				<div class="col-lg-6">
					<form action="../controlador/registro.php" method="post">
						<h1>Registro</h1>
						<p><input type="text" class="" name="nombre" placeholder="nombre" required></p>
						<p><input type="text" class="" name="email" placeholder="email" required></p>
						<p><input type="password" class="" name="contraseña" placeholder="Contraseña" required></p>
						<div class="form-group">
							<label for="tipo">Tipo de usuario</label>
							<p><select class="form-control" id="tipo" name="tipo">
								<option>Cliente</option>
								<option>Empleado</option>
								</select>
							</p>
							<p><button type="submit" href="./index.php" name="nuevocliente" value="Registrate" class="btn btn-dark">Registrarse</button></p>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="login" class="elemento_menu oculto">
			<div class="row">
				<div i class="col-lg-6">
					<form action="../controlador/iniciarsesion.php" method="post">
						<h1>Iniciar Sesión</h1>
						<p><input placeholder="Email" type="email" name="email"></p>
						<p><input placeholder="Contraseña" type="password" name="contra"></p>
						<p><button type="submit" value="Iniciar sesión" class="btn btn-dark">Iniciar sesión</button></p>
					</form>
				</div>
			</div>
		</div>

	</div>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
		<?php require 'footer.php'?>
</html>