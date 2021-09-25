<?php
    require "../modelo/usuarios.php";
    require "../modelo/conexion.php";

    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $contraseña=$_POST["contraseña"];
    $tipo=$_POST["tipo"];
    //echo $nombre;

    if (isset($nombre)){
        //creo el usuario con los datos del formulario
        $usuario=new usuarios($nombre,$email,$contraseña,$tipo);
        /*echo $usuario->getNombre();
        echo $usuario->getEmail();
        echo $usuario->getContraseña();*/
        //echo $usuario->getTipo();
        //inserto el producto nuevo en la base de datos con los metodos correspondientes
        $usuario->setUsuarioNuevo();
        //echo "esto debe funcionar";
        //una vez hecho esto,se cierra la conexion y redirecciono a u una pagina que nos va a dar un mensaje y luego nos manda a la la pagina del trabajador de vuelta*/
        Conexion::cerrar();
        header("location:../vista/mensajecorrectoindex.php");
    } else {
        Conexion::cerrar();
        header("location:../vista/mensajeerroneoindex.php");
    }


?>