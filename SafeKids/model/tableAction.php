<?php

if($_SESSION['SafekidsAdmin'] == null){
  header('Location:/safekids/views/login.php');
  exit();
}
require_once('conexion.php');
class tableAction{
    public function deleteUser($Id_nino ){
      $per= new Conexion();
      $conn=$per->Conectar();
      $sql ="DELETE FROM nino_table WHERE Id_nino  = :Id_nino";
      $consulta_Eliminar=$conn->prepare($sql);
      $consulta_Eliminar->bindParam(':Id_nino',$Id_nino );
      $consulta_Eliminar->execute();
    }
}
?>