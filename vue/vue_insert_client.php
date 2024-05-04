<h3 style="font-family:bodoni MT;  font-weight: bold; text-decoration: underline;">Ajout d'un client</h3>

<form method="post">
    <table>
        <tr>
            <td style="font-weight: bold;">Nom :</td>
            <td><input type="text" name="nom" value="<?= ($leClient!=null)?$leClient['nom']:'' ?>" ></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Prénom :</td>
            <td><input type="text" name="prenom" value="<?= ($leClient!=null)?$leClient['prenom']:'' ?>" ></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Adresse :</td>
            <td><input type="text" name="adresse" value="<?= ($leClient!=null)?$leClient['adresse']:'' ?>" ></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Email :</td>
            <td><input type="text" name="email" value="<?= ($leClient!=null)?$leClient['email']:'' ?>" ></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Téléphone :</td>
            <td><input type="text" name="tel" value="<?= ($leClient!=null)?$leClient['tel']:'' ?>" class="field"></td>
        </tr>
        <tr>
            <td><input type="reset" name="Annuler" value="Annuler"></td>
            <td><input type="submit" <?= ($leClient!=null)?'name="Modifier" value="Modifier"' : 'name="Valider" value="Valider"' ?>></td>
        </tr>
    </table>
    <?= ($leClient!=null)?'<input type="hidden" name="idclient" value="'.$leClient['idclient'].'">' :'' ?>
</form>