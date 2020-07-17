<?php
if($_SESSION['SafekidsAdmin'] == null){
    header('Location:/safekids/views/login.php');
    exit();
  }
require_once('conexion.php');
class tableConsul{
    function usuarios(){
        $per= new Conexion();
        $conn=$per->Conectar();
        $datos=null;
        $sql ="SELECT * FROM nino_table WHERE Id_padre = :Id_padre ";
        $log=$conn->prepare($sql);
        $log->bindParam(':Id_padre',$_SESSION['SafekidsAdmin']);
        $log->execute();
        while($info=$log->fetch()){
            $datos[] = $info;
        }
        return	$datos;
    }
}
?>