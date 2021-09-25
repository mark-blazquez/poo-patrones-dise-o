<?php
    require_once "../modelo/productos.php";
    require_once '../modelo/conexion.php';

    $nombre=$_POST["nombre"];
    
    if (isset($nombre)){
        //borro el producto con los datos del formulario
        $producto=new productos("null",$nombre,"null","null");
        echo $producto->getNombre();
        //borro de la base de datos con la funcion pertinente y en caso de no existir el producto pasado devuelvo a pagina de error 
        $producto->delProducto();
        //una vez hecho esto redirecciono a u una pagina que nos va a dar un mensaje y luego nos manda a la la pagina del trabajador de vuelta
        Conexion::cerrar();
        header("location:../vista/mensajecorrecto.php");
    } else {
        Conexion::cerrar();
        header("location:../vista/mensajeerroneo.php");
    }
?>