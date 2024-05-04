<h3 style="font-family:bodoni MT;  font-weight: bold; text-decoration: underline;">Ajout d'un objet</h3>

<form method="post">
    <table>
        <tr>
            <td style="font-weight: bold;">Marque :</td>
            <td><input type="text" name="marque" value="<?= ($leObjet!=null)?$leObjet['marque']:'' ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Prix :</td>
            <td><input type="text" name="prix" value="<?= ($leObjet!=null)?$leObjet['prix']:'' ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Date achat :</td>
            <td><input type="text" name="dateAchat" value="<?= ($leObjet!=null)?$leObjet['dateAchat']:'' ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Le Client : </td>
            <td><select name="idclient" value="<?= ($leObjet!=null)?$leObjet['idclient']:'' ?>">
                <?php
                if(isset($lesClients)){
                    foreach($lesClients as $unClient){
                        echo "<option value='". $unClient['idclient']. "'>";
                        echo $unClient['nom']." ".$unClient['prenom'] ; 
                        echo "</option>";
                    }
                }
                ?>
            </select>
            </td>
        </tr>
        <tr>
             <td><input type="reset" name="Annuler" value="Annuler"></td>
            <td><input type="submit" <?= ($leObjet!=null)?'name="Modifier" value="Modifier"' : 'name="Valider" value="Valider"' ?> ></td>
        </tr>
    </table>
    <?= ($leObjet!=null)?'<input type="hidden" name="idobjet" value="'.$leObjet['idobjet'].'">' :'' ?>
</form>