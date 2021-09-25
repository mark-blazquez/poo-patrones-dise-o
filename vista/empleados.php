	<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<?php
    include "head.php";
?>
<body>
    <br>
    <?php
        include "headerempleado.php";
    ?>
    <div class=" container ">
        <h2 class="text-center">Página de gestión de productos</h2><br>
        <!--<h4 class="text-center">buenas empleado <?//php echo $empleado->getNombre() ?> con id <?php //echo $empleado->getId() ?> que desea hacer hoy</h4>-->
        <div class="row">
            <div class="col-lg-12" style="text-align: center;">
                <button type="button" class="btn btn-dark" data-toggle="collapse" href="#datos" role="button" aria-expanded="false">Gestionar productos</button>
                <div class="collapse card-header" id="datos">
                    <div class="row">
                        <div class="col-lg-6">
                            <button class="btn btn-secondary" type="button" data-toggle="collapse" href="#crear" role="button" aria-expanded="false">Crear producto</button></br>
                            <div class="btn collapse col-lg-6" data-toggle="collapse" id="crear" href="#crear producto" role="button" aria-expanded="false">
                                <form id="crear producto" action="../controlador/crearproducto.php" method="post">
                                    <div class="form-group">
                                        <label>Imagen producto</label>
                                        <input type="text" class="form-control" name="urlimagen" placeholder="codigo url de imagen"required>
                                        <label>Nombre producto</label>
                                        <input type="text" class="form-control" name="nombre"  placeholder="nombre"required>
                                        <label>Precio producto</label>
                                        <input type="text" class="form-control" name="precio" placeholder="precio"required>
                                        <label>Tipo producto</label>
                                        <input type="text" class="form-control" name="tipo" placeholder="tipo"required><br>
                                        <button type="submit" class="btn btn-success" value="Introducir">Introducir</button>
                                    </div>  
                                </form>
                            </div><br>  
                        </div>                      
                        <div class="col-lg-6">
                            <button class="btn btn-secondary" type="button" class="btn" data-toggle="collapse" href="#borrar" role="button" aria-expanded="false">Borrar productos</button></br>
                            <div class="btn collapse col-lg-6" data-toggle="collapse" id="borrar" href="#borrar producto" role="button" aria-expanded="false">
                                <form id="borrar producto" action="../controlador/borrarproducto.php" method="post">
                                    <div class="form-group">
                                        <label >Nombre del producto a borrar</label>
                                        <input type="text" class="form-control" name="nombre" placeholder="nombre producto"required><br>
                                        <button type="submit" class="btn btn-danger" value="Introducir">Eliminar</button>
                                    </div>                                      
                                </form>
                            </div>
                        </div>
                    </div>
                </div>                      
            </div>
        </div>
    </div><br><br>
    <?php
        include "footer.php"
    ?>
</body>
</html>