<?php
require_once('../model/rejistroPadre.php');
$rejis = new rejistroPadre();
//aptura de bono 
if(isset($_POST['Guardar'])){
    $Nombre = $_POST['Nombre'];
    $Ap_paterno = $_POST['Ap_paterno'];
    $Ap_materno = $_POST['Ap_materno'];
    $Fecha_nacimineto = $_POST['Fecha_nacimineto'];
    $email = $_POST['Email'];
    $pass = $_POST['Password'];
    
        if ($Nombre==""||$Ap_paterno==""||$Ap_materno==""||$Fecha_nacimineto==""||$email=="" || $pass==""){
            header('Location:/safekids/views/rejistroPadre.php');
            exit();
        }else {
            //validacón de usuario
            
            $usery = $rejis->rejistrar($Nombre,$Ap_paterno,$Ap_materno,$Fecha_nacimineto,$email,$pass);
            if ($user != null){
                header('Location:/safekids/views/rejistroPadre.php');
            }
            else{
                header('Location:/safekids/views/login.php');
                exit(); 
            }
        }
        
    }
?>