<?php
session_start();
if($_SESSION['SafekidsAdmin'] == null){
  header('Location:/safekids/views/login.php');
  exit();
}
require('../model/editarUser.php');
$editarUser = new editarUser();
//aptura de bono 
if(isset($_POST['Guardar'])){
    $Nombre = $_POST['Nombre'];
    $Ap_paterno = $_POST['Ap_paterno'];
    $Ap_materno = $_POST['Ap_materno'];
    $Fecha_nacimineto = $_POST['Fecha_nacimineto'];
    $Id_pulsera = $_POST['Id_pulsera'];
    
        if ($Nombre==""||$Ap_paterno==""||$Ap_materno==""||$Fecha_nacimineto==""|| $Id_pulsera==""){
            header('Location:/safekids/views/editarUser.php');
            echo $Nombre,$Ap_paterno,$Ap_materno,$Fecha_nacimineto,$id_pulsera;
            exit();
        }else {
            //validacón de usuario
            $usery = $editarUser->GuardarEditarUser($Nombre,$Ap_paterno,$Ap_materno,$Fecha_nacimineto,$Id_pulsera);
            if ($user != null){
                header('Location:/safekids/views/editarUser.php');
            }
            else{
                header('Location:/safekids/views/home.php');
            }
        }
        
    }
?>