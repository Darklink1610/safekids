<?php
require_once('conexion.php');
class rejistroPadre{
    public function rejistrar($Nombre,$Ap_paterno,$Ap_materno,$Fecha_nacimineto,$email,$pass){
        $per= new Conexion();
        $conn=$per->Conectar();
        $sql ="INSERT INTO padre_table ( Nombre,Ap_paterno, Ap_materno, Email,Password,Fecha_nacimineto) VALUES (:Nombre,:Ap_paterno,:Ap_materno,:email,:pass,:Fecha_nacimineto)";
        $log=$conn->prepare($sql);
        $log->bindParam(':Nombre',$Nombre);
        $log->bindParam(':Ap_paterno',$Ap_paterno);
        $log->bindParam(':Ap_materno',$Ap_materno);
        $log->bindParam(':Fecha_nacimineto',$Fecha_nacimineto);
        $log->bindParam(':email',$email);
        $log->bindParam(':pass',$pass);
        $log->execute();

        return	"rejistrado";
    }
}
?>