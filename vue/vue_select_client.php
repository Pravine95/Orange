<head><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <style>
       th{
        color: white;
       }
   </style>
</head>

<br>
<h3 style="font-family:bodoni MT; text-decoration: underline;  color: white; font-size: 29px;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkorange;"> Liste des clients </h3>
<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<b><table border="4"  cellspacing="10" width="100%"  style="text-align:center" style="color:orange;" class="w3-table-all w3-hoverable">
  <thead>
    <tr style="background-color: darkorange;">
        <th> Id client</th>
        <th> Nom</th>
        <th> Prénom </th>
        <th> Adresse </th>
        <th> Email </th>
        <th> Telephone </th>
        <?php 
        if(isset($_SESSION['role']) && $_SESSION['role'] == "Admin"){
            echo '<th style="color: white; font-weight: bold; text-align: center;"> Opérations </th>';
        }
        ?>
    </tr>
</thead>    
<?php
if (isset($lesClients)){
    foreach($lesClients as $unClient){
        echo "<tr>"; 
        echo "<td>".$unClient['idclient']."</td>";
        echo "<td>".$unClient['nom']."</td>";
        echo "<td>".$unClient['prenom']."</td>";
        echo "<td>".$unClient['adresse']."</td>";
        echo "<td>".$unClient['email']."</td>";
        echo "<td>".$unClient['tel']."</td>";
        if(isset($_SESSION['role']) && $_SESSION['role'] == "Admin"){
        echo "<td> <a href='index.php?page=2&action=sup&idclient=".$unClient['idclient']."'>"; 
        echo "<img src='images/supprimer.png' height='30' witdh='30'> </a>"; 

        echo "<a href='index.php?page=2&action=edit&idclient=".$unClient['idclient']."'>"; 
        echo "<img src='images/modifier.png' height='30' witdh='30'> </a>";
        echo "</td>";
        }
        echo "</tr>";

    }
}
?>
</table></b>

