<?php
include_once('../model/editarUser.php');

class contrucEditarUser{
    
    public function formEditarUser()
    {
        $editarUser=new editarUser();
        $user=$editarUser->infoditarUser();
        foreach($user as $datos){
            ?>
            <form action="../controllers/GuardarEditarUser.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <label class="label" for="Nombre">Nombre</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="Nombre" placeholder="Nombre" value="<?php echo $datos['Nombre'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="label" for="Ap_paterno">Ap paterno</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="Ap_paterno" placeholder="Ap paterno"value="<?php echo $datos['Ap_paterno'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="label" for="Ap_materno">Ap materno</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="Ap_materno" placeholder="Ap materno"value="<?php echo $datos['Ap_materno'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="label" for="Fecha_nacimineto">Fecha nacimineto </label>
                        </td>
                        <td>
                            <input class="input" type="date" name="Fecha_nacimineto"value="<?php echo $datos['Fecha_nacimineto'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="label" for="id_pulsera">id de pulsera</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="Id_pulsera" placeholder="id de pulsera (xxx-xxx-xxx)"value="<?php echo $datos['Id_pulsera'];?>">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <br />
                            <button class="button-primary " name="Guardar" type="submit"> Guardar </button>
                        </td>
                    </tr>
                </table>
            </form>
            <?php
        }
    }
}
?>