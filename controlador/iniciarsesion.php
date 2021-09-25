<?php
    require_once "../modelo/usuarios.php";
    require_once '../modelo/conexion.php';

    //recuperamos los datos
    $email=$_POST["email"];
    $contra=$_POST["contra"];
    //echo $email;
    //echo $contra;
    //creamos un objeto al k le vamos ha aplicar la funcion para redireccionar a empleado o cliente
    $usuario1=new usuarios(null,$email,$contra,null);
    $usuario1->setIniciarSesion();

?>