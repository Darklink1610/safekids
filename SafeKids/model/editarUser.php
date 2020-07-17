<?php
if($_SESSION['SafekidsAdmin'] == null){
  header('Location:/safekids/views/login.php');
  exit();
}
require_once('conexion.php');
class editarUser{
   public function infoditarUser(){
    $per= new Conexion();
    $conn=$per->Conectar();
    $datos=null;
    $sql ="SELECT * FROM nino_table WHERE Id_nino = :Id_nino";
    $log=$conn->prepare($sql);
    $log->bindParam(':Id_nino',$_SESSION['SafekidsEditaUser']);
    $log->execute();
    while($info=$log->fetch()){
        $datos[] = $info;
    }
    return	$datos;
   }

    public function GuardarEditarUser($Nombre,$Ap_paterno,$Ap_materno,$Fecha_nacimineto,$Id_pulsera){
        $per= new Conexion();
        $conn=$per->Conectar();
        $sql ="UPDATE nino_table SET Nombre=:Nombre, Ap_paterno =:Ap_paterno, Ap_materno =:Ap_materno, Fecha_nacimineto =:Fecha_nacimineto, Id_pulsera =:Id_pulsera WHERE Id_nino = :Id_nino AND Id_padre =:Id_padre";
        $log=$conn->prepare($sql);
        $log->bindParam(':Nombre',$Nombre);
        $log->bindParam(':Ap_paterno',$Ap_paterno);
        $log->bindParam(':Ap_materno',$Ap_materno);
        $log->bindParam(':Fecha_nacimineto',$Fecha_nacimineto);
        $log->bindParam(':Id_pulsera',$Id_pulsera);
        $log->bindParam(':Id_nino',$_SESSION['SafekidsEditaUser']);
        $log->bindParam(':Id_padre',$_SESSION['SafekidsAdmin']);
        var_dump($_SESSION['SafekidsAdmin']);
        $log->execute();

        return	"rejistrado";
    }
}
?>