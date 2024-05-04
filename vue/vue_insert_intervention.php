<h3 style="font-family:bodoni MT;  font-weight: bold; text-decoration: underline;">Ajout d'une intervention</h3>

<form method="post">
    <table>
        <tr>
            <td style="font-weight: bold;"> Description :  </td>
            <td><input type="text" name="descriptionInter" value="<?= ($laIntervention!=null)?$laIntervention['descriptionInter']:'' ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Date de l'intervention : </td>
            <td><input type="text" name="dateInter" value="<?= ($laIntervention!=null)?$laIntervention['dateInter']:'' ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Prix : </td>
            <td><input type="text" name="prixInter" value="<?= ($laIntervention!=null)?$laIntervention['prixInter']:'' ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">L'objet : </td>
            <td><select name="idobjet" value="<?= ($laIntervention!=null)?$laIntervention['idobjet']:'' ?>">
                <?php
                if(isset($lesObjets)){
                    foreach($lesObjets as $unObjet){
                        echo "<option value='". $unObjet['idobjet']. "'>";
                        echo $unObjet['marque']." ".$unObjet['prix'];
                        echo "</option>";
                    }
                }
                ?>
            </select>
            </td>
        </tr>
        <tr>
            <td style="font-weight: bold;"> Le technicien : </td>
            <td><select name="idtechnicien" value="<?= ($laIntervention!=null)?$laIntervention['idtechnicien']:'' ?>">
                <?php
                if(isset($lesTechniciens)){
                    foreach($lesTechniciens as $unTechnicien){
                        echo "<option value='". $unTechnicien['idtechnicien']. "'>";
                        echo $unTechnicien['nom']." ".$unTechnicien['prenom'];
                        echo "</option>";
                    }
                }
                ?>
            </select>
            </td>
        </tr>
        <tr>
             <td><input type="reset" name="Annuler" value="Annuler"></td> 
            <td><input type="submit" <?= ($laIntervention!=null)?'name="Modifier" value="Modifier"' : 'name="Valider" value="Valider"' ?> ></td>
        </tr>
    </table>
    <?= ($laIntervention!=null)?'<input type="hidden" name="idintervention" value="'.$laIntervention['idintervention'].'">' :'' ?>
</form>