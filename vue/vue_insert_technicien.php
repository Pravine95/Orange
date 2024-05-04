
<h3 style="font-family:bodoni MT;  font-weight: bold; text-decoration: underline;">Ajout d'un technicien</h3>

<form method="post">
    <table>
        <tr>
            <td style="font-weight: bold;">Nom:</td>
            <td><input type="text" name="nom" value="<?= ($leTechnicien!=null)?$leTechnicien['nom']:'' ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Prénom :</td>
            <td><input type="text" name="prenom" value="<?= ($leTechnicien!=null)?$leTechnicien['prenom']:'' ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Compétences :</td>
            <td><input type="text" name="competence" value="<?= ($leTechnicien!=null)?$leTechnicien['competence']:'' ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Email :</td>
            <td><input type="text" name="email" value="<?= ($leTechnicien!=null)?$leTechnicien['email']:'' ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Téléphone :</td>
            <td><input type="text" name="tel" value="<?= ($leTechnicien!=null)?$leTechnicien['tel']:'' ?>"></td>
        </tr>

        <tr>
            <td><input type="reset" name="Annuler" value="Annuler"></td> 
            <td><input type="submit" <?= ($leTechnicien!=null)?'name="Modifier" value="Modifier"' : 'name="Valider" value="Valider"' ?>></td>
        </tr>
    </table>
    <?= ($leTechnicien!=null)?'<input type="hidden" name="idtechnicien" value="'.$leTechnicien['idtechnicien'].'">' :'' ?>
</form>