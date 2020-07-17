<?php
    session_start();
    if($_SESSION['SafekidsAdmin'] == null){
        header('Location:/safekids/views/login.php');
        exit();
    }
    require_once("../model/tableAction.php");
    $tableAction= new tableAction();
    if(isset($_POST['Ubicar'])){
        echo $_POST['Ubicar'];
        header('Location:/safekids/views/ubicacion.php');
    }
    if(isset($_POST['Editar'])){
        $_SESSION['SafekidsEditaUser']=$_POST['Editar'];
        header('Location:/safekids/views/editarUser.php');
    }
    if(isset($_POST['Eliniar'])){
        $tableAction->deleteUser($_POST['Eliniar']);
        header('Location:/safekids/views/home.php');
    }  
?>
