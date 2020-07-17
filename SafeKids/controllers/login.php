<?php
session_start();
require('../model/login.php');
$login = new login();
//aptura de bono 
if(isset($_POST['Entrar'])){
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];
        if ($email=="" || $pass==""){
            header('Location:/safekids/views/login.php');
            exit();
        }else {
            //validacón de usuario
            
            $user = $login->log($email,$pass);
            
            if ($user != null){
                foreach($user as $datos){
                    $_SESSION['SafekidsAdmin'] = $datos['Id_padre'] ;
                }
                header('Location:/safekids/views/home.php');
            }
            else{
                header('Location:/safekids/views/login.php');
                exit(); 
            }

        }
        
    }
?>