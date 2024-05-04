<h2 style="font-weight: bold; text-decoration: underline;"> Gestion des clients </h2>
<?php
	if(isset($_SESSION['email']) && isset($_SESSION['role']) && $_SESSION['role'] == "Admin"){
		$leClient = null; 
	if (isset($_GET['action'])  && isset($_GET['idclient']))
	{
		$action= $_GET['action'];
		$idclient = $_GET['idclient'];

		switch($action)
		{
			case "sup" : $unControleur->deleteClient($idclient) ; break;
			case "edit" : 
			$leClient= $unControleur->selectWhereClients($idclient);
			break;
		}
	}

	require_once ("vue/vue_insert_client.php");
		if (isset($_POST['Valider']))
		{
			$unControleur->insertClient ($_POST);
		}

		if (isset($_POST['Modifier']))
		{
			$unControleur->updateClient ($_POST);
			header("Location: index.php?page=2");
		}

	}
		if (isset ($_POST['Filtrer']))

		{

			$filtre = $_POST['filtre'];
			$lesClients = $unControleur->searchAllClients($filtre);
		}else{

				$lesClients= $unControleur->selectAllClients ();
			}
		
		require_once ("vue/vue_select_client.php");
	
?>