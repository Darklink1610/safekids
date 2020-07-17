<?php
session_start();
if($_SESSION['SafekidsAdmin'] == null||!$_SESSION['SafekidsEditaUser']){
  header('Location:/safekids/views/login.php');
  exit();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/master.css">
        <title>configuración</title>
    </head>

    <body>
        <div class="container">
            <img src="../img/user.png" class="avatar" alt="Avatar Image">
            <div class="h1"> Edita infrmacion </div>
            <?php
                require_once('../controllers/editarUser.php');
                $editarUser = new contrucEditarUser();
                $editarUser->formEditarUser();
            ?>
            <a class="a2" href="home.php"> << volver</a>
        </div>
    </body>
</html>