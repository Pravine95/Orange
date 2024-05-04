<head><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <style>
       th{
        color: white;
       }
   </style>
</head>

<br>
<h3 style="font-family:bodoni MT; text-decoration: underline;  color: white; font-size: 29px;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkorange;">Liste des interventions </h3>
<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<b><table border="4"  cellspacing="10" width="100%"  style="text-align:center" style="color:orange;" class="w3-table-all w3-hoverable">
    <thead>
    <tr style="background-color: darkorange;">
        <th> Id intervention </th>
        <th> Description </th>
        <th> date de l'intervention </th>
        <th> prix </th>
        <th> Id objet </th>
        <th> Id technicien </th>
        <?php 
        if(isset($_SESSION['role']) && $_SESSION['role'] == "Admin"){
        echo' <th> Opérations </th>';
        }
        ?>     
    </tr>
</thead>

<?php
if (isset($lesInterventions)){
    foreach($lesInterventions as $unIntervention){
        echo "<tr>";
        echo "<td>".$unIntervention['idintervention']."</td>";
        echo "<td>".$unIntervention['descriptionInter']."</td>";
        echo "<td>".$unIntervention['dateInter']."</td>";
        echo "<td>".$unIntervention['prixInter']."</td>";
        echo "<td>".$unIntervention['idobjet']."</td>";
        echo "<td>".$unIntervention['idtechnicien']."</td>";
        if(isset($_SESSION['role']) && $_SESSION['role'] == "Admin"){
        echo "<td> <a href='index.php?page=5&action=sup&idintervention=".$unIntervention['idintervention']."'>"; 
        echo "<img src='images/supprimer.png' height='30' witdh='30'> </a>"; 

        echo "<a href='index.php?page=5&action=edit&idintervention=".$unIntervention['idintervention']."'>"; 
        echo "<img src='images/modifier.png' height='30' witdh='30'> </a>";
        echo "</td>";
        }   
        echo "</tr>";

    }
}
?>
</table></b>
