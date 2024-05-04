<h2 style="font-weight: bold; text-decoration: underline;"> Gestion des interventions </h2>

<?php
	if(isset($_SESSION['email']) && isset($_SESSION['role']) && $_SESSION['role'] == "Admin"){
	$laIntervention = null; 
	if (isset($_GET['action']) && isset($_GET['idintervention']))
	{
		$action = $_GET['action']; 
		$idintervention= $_GET['idintervention']; 

		switch($action)
		{
			case "sup" : $unControleur->deleteIntervention($idintervention) ; break;
			case "edit" : 
			$laIntervention = $unControleur->selectWhereInterventions($idintervention);
				break; 
		}
	}

	$lesObjets = $unControleur->selectAllObjets ();
	$lesTechniciens = $unControleur->selectAllTechniciens ();
	require_once ("vue/vue_insert_intervention.php");

	if (isset($_POST['Valider']))
	{
		$unControleur->insertIntervention($_POST); 
	}
	if (isset($_POST['Modifier']))
	{
		$unControleur->updateIntervention ($_POST);
		header("Location: index.php?page=5");
	}
}	
	if (isset($_POST['Filtrer']))
	{
		$filtre = $_POST['filtre']; 
		$lesInterventions = $unControleur->searchAllInterventions($filtre);
	}else {

		$lesInterventions = $unControleur->selectAllInterventions (); 
	}
	require_once ("vue/vue_select_intervention.php");
?>