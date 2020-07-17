<?php
session_start();
if($_SESSION['SafekidsAdmin'] == null){
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
            <div class="h1"> Nuevo usuario </div>
            <form action="../controllers/rejistroUsers.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <label class="label" for="Nombre">Nombre</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="Nombre" placeholder="Nombre">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="label" for="Ap_paterno">Ap paterno</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="Ap_paterno" placeholder="Ap_paterno">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="label" for="Ap_materno">Ap materno</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="Ap_materno" placeholder="Ap_materno">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="label" for="Fecha_nacimineto">Fecha nacimineto </label>
                        </td>
                        <td>
                            <input class="input" type="date" name="Fecha_nacimineto">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="label" for="id_pulsera">id de pulsera</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="id_pulsera" placeholder="id de pulsera (xxx-xxx-xxx)">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <br />
                            <button class="button-primary " name="Guardar" type="submit"> Guardar </button>
                        </td>
                    </tr>
                </table>
            </form>
            <a class="a2" href="home.php"> << volver</a>
        </div>
    </body>
</html>