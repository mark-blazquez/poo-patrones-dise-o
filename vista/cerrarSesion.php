<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include "head.php";
    ?>
</head>
<body>
    <div class="container alert alert-danger" role="alert">
        <form action="" method="post">
            <p class="text-center">Estas seguro de que quieres cerrar sesion: <input type="text" name="seguro" placeholder="Si o No"></p>
            <div class="d-flex justify-content-center">
                <input type="hidden" name="hola">
                <button class="btn btn-primary " type="submit">Enviar</button>
            </div>
        </form>
        <?php
            if(isset($_POST['hola'])) {
                if ($_POST['seguro']=='No') {
                    header('Location: cliente.php');
                } elseif ($_POST['seguro']=='Si') {
                    header('Location: index.php');
                    // session_destroy();
                } else {
                    ?><p class="text-center">Escribe Si o No</p><?php
                }
            } else {
                ?><p class="text-center">Escribe Si o No</p><?php
            }
        ?>  
    </div>
</body>
</html>
