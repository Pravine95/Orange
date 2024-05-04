<h2 style="font-weight: bold; text-decoration: underline;">  Gestion des objets </h2>

<?php
	if(isset($_SESSION['email']) && isset($_SESSION['role']) && $_SESSION['role'] == "Admin"){
	$leObjet = null; 
	if (isset($_GET['action']) && isset($_GET['idobjet']))
	{
		$action = $_GET['action']; 
		$idobjet = $_GET['idobjet']; 

		switch($action)
		{
			case "sup" : $unControleur->deleteObjet($idobjet) ; break;
			case "edit" : 
			$leObjet = $unControleur->selectWhereObjets($idobjet); 
			break; 
		}
	}
	$lesClients = $unControleur->selectAllClients ();
	require_once ("vue/vue_insert_objet.php");

	if (isset($_POST['Valider']))
	{
		$unControleur->insertObjet($_POST); 
	}
	if (isset($_POST['Modifier']))
	{
		$unControleur->updateObjet ($_POST);
		header("Location: index.php?page=3");
	}
}
	
	if (isset($_POST['Filtrer']))
	{
		$filtre = $_POST['filtre']; 
		$lesObjets = $unControleur->searchAllObjets($filtre);
	}else {

		$lesObjets = $unControleur->selectAllObjets (); 
	}
	require_once ("vue/vue_select_objet.php");
?>