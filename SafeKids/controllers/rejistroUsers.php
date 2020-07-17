<?php
session_start();
if($_SESSION['SafekidsAdmin'] == null){
  header('Location:/safekids/moduls/views/login.php');
  exit();
}
require('../model/rejistroUser.php');
$rejis = new rejistroUser();

if(isset($_POST['Guardar'])){
    $Nombre = $_POST['Nombre'];
    $Ap_paterno = $_POST['Ap_paterno'];
    $Ap_materno = $_POST['Ap_materno'];
    $Fecha_nacimineto = $_POST['Fecha_nacimineto'];
    $id_pulsera = $_POST['id_pulsera'];
    
        if ($Nombre==""||$Ap_paterno==""||$Ap_materno==""||$Fecha_nacimineto==""|| $id_pulsera==""){
            header('Location:/safekids/views/rejistroUser.php');
            exit();
        }else {
            //validacón de usuario
            $usery = $rejis->rejistrarUser($Nombre,$Ap_paterno,$Ap_materno,$Fecha_nacimineto,$id_pulsera);
            if ($user != null){
                header('Location:/safekids/views/rejistroUser.php');
            }
            else{
                header('Location:/safekids/views/home.php');
            }
        }
        
    }
?>