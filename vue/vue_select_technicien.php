<head><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <style>
       th{
        color: white;
       }
   </style>
</head>

<br>
<h3 style="font-family:bodoni MT; text-decoration: underline;  color: white; font-size: 29px;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkorange;"> Liste des techniciens </h3>
<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<b><table border="4"  cellspacing="10" width="100%"  style="text-align:center" style="color:orange;" class="w3-table-all w3-hoverable">
    <thead>
    <tr style="background-color: darkorange;">
        <th> Id technicien </th>
        <th> Nom </th>
        <th> Prénom </th>
        <th>Compétences</th>
        <th> Email</th>
        <th> Tel</th> 
        <?php 
        if(isset($_SESSION['role']) && $_SESSION['role'] == "Admin"){
        echo' <th> Opérations </th>';
        }
        ?>
    </tr>
</thead>

<?php
if (isset($lesTechniciens)){
    foreach($lesTechniciens as $unTechnicien){
        echo "<tr>";
        echo "<td>".$unTechnicien['idtechnicien']."</td>";
        echo "<td>".$unTechnicien['nom']."</td>";
        echo "<td>".$unTechnicien['prenom']."</td>";
        echo "<td>".$unTechnicien['competence']."</td>";
        echo "<td>".$unTechnicien['email']."</td>";
        echo "<td>".$unTechnicien['tel']."</td>";
        if(isset($_SESSION['role']) && $_SESSION['role'] == "Admin"){
        echo "<td> <a href='index.php?page=4&action=sup&idtechnicien=".$unTechnicien['idtechnicien']."'>"; 
        echo "<img src='images/supprimer.png' height='30' witdh='30'> </a>"; 

        echo "<a href='index.php?page=4&action=edit&idtechnicien=".$unTechnicien['idtechnicien']."'>"; 
        echo "<img src='images/modifier.png' height='30' witdh='30'> </a>";
        echo "</td>";
        }
        echo "</tr>";

    }
}
?>
</table></b>