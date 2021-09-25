<?php
    require_once "../modelo/productos.php";
    require_once '../modelo/conexion.php';
    

    $urlimagen=$_POST["urlimagen"];
    $nombre=$_POST["nombre"];
    $precio=$_POST["precio"];
    $tipo=$_POST["tipo"];

    if (isset($nombre)){
        //creo el producto con los datos del formulario
        $producto=new productos($urlimagen,$nombre,$precio,$tipo);
        //echo $producto->getNombre();
        //inserto el producto nuevo en la base de datos con los metodos correspondientes
        $producto->setProductoNuevo();
        //una vez hecho esto,se cierra la conexion y redirecciono a u una pagina que nos va a dar un mensaje y luego nos manda a la la pagina del trabajador de vuelta*/
        Conexion::cerrar();
        header("location:../vista/mensajecorrecto.php");
    } else {
        Conexion::cerrar();
        header("location:../vista/mensajeerroneo.php");
    }
?>