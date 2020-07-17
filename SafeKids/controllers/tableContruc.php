<?php
if($_SESSION['SafekidsAdmin'] == null){
  header('Location:/safekids/views/login.php');
  exit();
}
require_once('../model/tableConsul.php');
class tableContruc{
    function tableUsers()
    {
        $tableConsul = new tableConsul();
        $tabla=$tableConsul->usuarios();
        if($tabla != null){
          foreach($tabla as $user){
            ?>
            <tr class="tr">
                <td class="td"><?php echo $user['Nombre'];?></td>
                <td class="td"><?php echo $user['Ap_paterno'];?></td>
                <td class="td"><?php echo $user['Ap_materno'];?></td>
                <td class="td"><?php echo date("d/m/Y", strtotime($user['Fecha_nacimineto']));?></td>
                <td class="td"><?php echo $user['Id_pulsera'];?></td>
                <form method="POST" action="../controllers/tableAction.php">
                  <td class="td"><button class="Ubicar btn" type="submit" name="Ubicar"value="<?php echo $user['Id_nino'];?>">Ubicar</button></td>
                  <td class="td"><button class="Editar btn" type="submit" name="Editar"value="<?php echo $user['Id_nino'];?>">Editar</button></td>
                  <td class="td"><button class="Eliniar btn"type="submit" name="Eliniar"value="<?php echo $user['Id_nino'];?>">Eliminar</button></td>
                </form>
            </tr>
            <?php
          }
        }else{
          header('Location:/safekids/views/rejistroUser.php');
        }
    }
}
?>









