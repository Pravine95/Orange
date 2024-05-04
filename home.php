<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="css/home.css" />
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <style> 
     .ecole {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size:95px;
  font-family: serif;
  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkorange;
  margin-top: -200px;
}

    .erreur{
                /*
                 box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
                 */ 
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            }

     </style>
</head>
<body Onload="alert('Bienvenue ! Vous êtes connecté(e)');">
    
    <div class="iris">
        <img src="images/fou.jpeg"  style=" width: 100%; height: 750px; /">
        <div class="ecole"><aside class='erreur'><h4 style="font-family: bodoni MT; font-size: 25px;">
    Vous êtes connecté en tant que : <?= $_SESSION['nom']. " ".$_SESSION['prenom'] ?>
    <br/>

    vous avez le rôle de : <?= $_SESSION['role']; ?> </div>

</h4>
</aside>
    </div>
<br>
<p><a href="https://www.orange.fr/">Pour en savoir plus : </a></p>

<br>
<br>
<br>


<h7 style="font-family:bodoni MT; text-decoration: underline; font-size: 29px; color: darkred; font-weight: bold;"> GESTION D'ORANGE</h7>
<br> 

<?php 
$nbClient=$unControleur->countClients () ['nb'];
$nbInterventions= $unControleur->countInterventions () ['nb'];
$nbObjets = $unControleur->countObjets () ['nb'];
$nbTechniciens = $unControleur->countTechniciens () ['nb'];
?> 

<div style="max-width: 400px;"> 
<table border="1" class="w3-table-all w3-hoverable">
    <tr class="w3-hover-orange">
        <td style="font-weight: bold;"> Nombre de clients : </td>
        <td><?= $nbClient ?> </td>
    </tr>

    <tr class="w3-hover-orange">
        <td style="font-weight: bold;"> Nombre d'interventions : </td>
        <td><?= $nbInterventions ?> </td>
    </tr>

    <tr class="w3-hover-orange">
        <td style="font-weight: bold;"> Nombre d'objets :</td>
        <td><?= $nbObjets ?> </td>
    </tr>

    <tr class="w3-hover-orange">
        <td style="font-weight: bold;"> Nombre de techniciens : </td>
        <td><?= $nbTechniciens ?> </td>
    </tr>
</table>
</div>

    
<!<?php
/*
    $lesInscriptions = $unControleur->selectAllInscriptions();
    foreach ($lesInscriptions as $uneInscription) {
        echo "<tr>";
        echo "<td>".$uneInscription['nom']."</td>";
        echo "<td>".$uneInscription['prenom']."</td>";
        echo "<td>".$uneInscription['intervention']."</td>";
        echo "<td>".$uneInscription['objet']."</td>";
        echo "<td>".$uneInscription['technicien']."</td>";
        echo "<tr>";
    }
    */
?>

</table>

</body>
</html>