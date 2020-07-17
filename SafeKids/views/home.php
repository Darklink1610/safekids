<?php
session_start();
if($_SESSION['SafekidsAdmin'] == null){
  header('Location:/safekids/views/login.php');
  exit();
}
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/master.css">
    <title>configuración</title>
</head>

<body>
    <div class="container">
        <img src="../img/user.png" class="avatar" alt="Avatar Image">
        <div class="h1"> Inicio </div>
        <div class="menu">
            <div class="nuevo">
                <a class="a2" href="rejistroUser.php"> + Nuevo Usuario </a>
            </div>
            <div class="salir">
                <a class="a2" href="../controllers/salir.php"> Salir </a>
            </div>
        </div>
        <div class="usuarions">
            <table class="table">
                <tr class="tr">
                    <th class="th">Nombre</th>
                    <th class="th">Apellido paterno</th>
                    <th class="th">Apellido Materno </th>
                    <th class="th">Fecha de nacimiento</th>
                    <th class="th">Id de pulsera</th>
                    <th class="th alin-center"colspan="3">Acciones</th>
                </tr>
                <?php
                    require_once('../controllers/tableContruc.php');
                    $tableContruc =new tableContruc();
                    $tableContruc->tableUsers();
                ?>
            </table>
        </div>
        
    </div>
</body>

</html>