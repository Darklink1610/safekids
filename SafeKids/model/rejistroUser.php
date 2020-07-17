<?php

if($_SESSION['SafekidsAdmin'] == null){
  header('Location:/safekids/views/login.php');
  exit();
}
require_once('conexion.php');
class rejistroUser{
    public function rejistrarUser($Nombre,$Ap_paterno,$Ap_materno,$Fecha_nacimineto,$id_pulsera){
        $per= new Conexion();
        $conn=$per->Conectar();
        $sql ="INSERT INTO nino_table (Nombre, Ap_paterno,Ap_materno,Fecha_nacimineto, Id_padre,Id_pulsera) VALUES (:Nombre,:Ap_paterno, :Ap_materno, :Fecha_nacimineto, :Id_padre, :id_pulsera)";
        $log=$conn->prepare($sql);
        $log->bindParam(':Nombre',$Nombre);
        $log->bindParam(':Ap_paterno',$Ap_paterno);
        $log->bindParam(':Ap_materno',$Ap_materno);
        $log->bindParam(':Fecha_nacimineto',$Fecha_nacimineto);
        $log->bindParam(':Id_padre',$_SESSION['SafekidsAdmin']);
        $log->bindParam(':id_pulsera',$id_pulsera);
        $log->execute();

        return	"rejistrado";
    }
}
?>