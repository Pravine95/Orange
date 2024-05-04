<h2 style="font-weight: bold; text-decoration: underline;"> Gestion des techniciens </h2>

<?php
	if(isset($_SESSION['email']) && isset($_SESSION['role']) && $_SESSION['role'] == "Admin"){
	$leTechnicien = null; 
	if (isset($_GET['action']) && isset($_GET['idtechnicien']))
	{
		$action = $_GET['action']; 
		$idtechnicien= $_GET['idtechnicien']; 

		switch($action)
		{
			case "sup" : $unControleur->deleteTechnicien($idtechnicien) ; break;
			case "edit" : 
			$leTechnicien = $unControleur->selectWhereTechnicien($idtechnicien);
				break; 
		}
	}
	require_once ("vue/vue_insert_technicien.php");

	if (isset($_POST['Valider']))
	{
		$unControleur->insertTechnicien ($_POST); 
	}
	if (isset($_POST['Modifier']))
	{
		$unControleur->updateTechnicien ($_POST);
		header("Location: index.php?page=4");
	}
}
	if (isset($_POST['Filtrer']))
	{
		$filtre = $_POST['filtre']; 
		$lesTechniciens = $unControleur->searchAllTechniciens($filtre);
	}else {

		$lesTechniciens = $unControleur->selectAllTechniciens (); 
	}
	require_once ("vue/vue_select_technicien.php");
?>