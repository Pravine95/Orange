<?php
	class Modele{
		private $unPDO;

		public function __construct(){
			try{
				 $this->unPDO = new PDO("mysql:host=localhost;dbname=Orange", "root", "");
			}
			catch (PDOException $exp)
			{
				echo "Erreur connexion :".$exp->getMessage();
			}
		}



		public function verifConnexion($email, $mdp){
            $requete = "select * from user where email =:email and mdp =:mdp ;";
            $select = $this->unPDO->prepare($requete);
            $select->bindValue (":email", $email, PDO::PARAM_STR);
            $select->bindValue (":mdp", $mdp, PDO::PARAM_STR);
            $select->execute ();
            $unUser = $select->fetch ();
            return $unUser;
    
        }




	/************ Gestion des clients **************/
	public function selectAllClients (){
		$requete = "select * from client ;" ;
		$select = $this->unPDO->prepare ($requete); 
		$select->execute (); 
		return $select->fetchAll();  
	}

	public function searchAllClients($filtre){
    $requete = "select * from client where nom like :filtre or prenom like :filtre; ";
    $donnees = array(":filtre" => "%" . $filtre . "%");
    $select = $this->unPDO->prepare($requete);
    $select->execute($donnees);
    return $select->fetchAll();
}

	public function insertClient ($tab){
		$requete ="insert into client values(
			null, :nom, :prenom, :adresse, :email, :tel);";
		$donnees =array(	":nom"=>$tab['nom'], 
							":prenom"=>$tab['prenom'], 
							":adresse"=>$tab['adresse'],
							":email"=>$tab['email'],
							":tel"=>$tab['tel']);
		$select = $this->unPDO->prepare ($requete); 
		$select->execute ($donnees); 
	}

	public function deleteClient ($idclient){
		$requete ="delete from client where idclient = :idclient ; " ;
		$donnees =array(":idclient"=>$idclient);
		$select = $this->unPDO->prepare ($requete); 
		$select->execute ($donnees); 
	}

	public function selectWhereClients ($idclient){
		$requete = "select * from client where idclient=:idclient;" ;
		$donnees =array(":idclient"=>$idclient);
		$select = $this->unPDO->prepare ($requete); 
		$select->execute ($donnees);
		$unClient = $select->fetch ();
		return $unClient; 
	}

	public function updateClient ($tab){
		$requete="update client set nom= :nom, prenom=:prenom, adresse=:adresse, email=:email, tel=:tel where idclient=:idclient ;";
		$donnees=array(
					":nom"=>$tab['nom'],
					":prenom"=>$tab['prenom'],
					":adresse"=>$tab['adresse'],
					":email"=>$tab['email'],
					":tel"=>$tab['tel'],
					":idclient"=>$tab['idclient']
					);
		$select = $this->unPDO->prepare ($requete);
		$select->execute ($donnees);
	}

	public function countClients () {
        $requete = "select count(*) as nb from client;";
        $select = $this->unPDO->prepare ($requete);
        $select->execute();
        return $select->fetch();
    }



	/************ Gestion des objets **************/
	public function selectAllObjets (){
		$requete ="select * from objet ; " ;
		$select = $this->unPDO->prepare ($requete); 
		$select->execute (); 
		return $select->fetchAll();  
	}

	public function searchAllObjets($filtre){
    $requete = "select * from objet where marque like :filtre or prix like :filtre or dateAchat like :filtre or idclient like :filtre ;";
    $donnees = array(":filtre" => "%" . $filtre . "%");
    $select = $this->unPDO->prepare($requete);
    $select->execute($donnees);
    return $select->fetchAll();
}

	public function insertObjet($tab){
		$requete ="insert into objet values (null, :marque, :prix, :dateAchat, :idclient);" ;
		$donnees =array( 
			":marque"=>$tab['marque'], 
			":prix"=>$tab['prix'], 
			":dateAchat"=>$tab['dateAchat'],
			":idclient"=>$tab['idclient']
		);
		$select = $this->unPDO->prepare ($requete); 
		$select->execute ($donnees); 
	}

	public function deleteObjet ($idobjet){
		$requete ="delete from objet where idobjet = :idobjet ; " ;
		$donnees =array(":idobjet"=>$idobjet);
		$select = $this->unPDO->prepare ($requete); 
		$select->execute ($donnees); 
	}

	public function selectWhereObjets ($idobjet){
		$requete = "select * from objet where idobjet=:idobjet;" ;
		$donnees =array(":idobjet"=>$idobjet);
		$select = $this->unPDO->prepare ($requete); 
		$select->execute ($donnees);
		$unObjet = $select->fetch ();
		return $unObjet; 
	}

	public function updateObjet ($tab){
		$requete="update objet set marque= :marque, prix= :prix, dateAchat= :dateAchat, idclient= :idclient where idobjet= :idobjet ;";
		$donnees=array(
					":marque"=>$tab['marque'],
					":prix"=>$tab['prix'],
					":dateAchat"=>$tab['dateAchat'],
					":idclient"=>$tab['idclient'],
					":idobjet"=>$tab['idobjet']
				);
		$select = $this->unPDO->prepare ($requete);
		$select->execute ($donnees);
	}


	public function countObjets () {
        $requete = "select count(*) as nb from objet;";
        $select = $this->unPDO->prepare ($requete);
        $select->execute();
        return $select->fetch();
    }

	/************ Gestion des techniciens **************/
	public function selectAllTechniciens (){
		$requete ="select * from technicien ; " ;
		$select = $this->unPDO->prepare ($requete); 
		$select->execute (); 
		return $select->fetchAll();  
	}

	public function searchAllTechniciens($filtre){
    $requete = "select * from technicien where nom like :filtre or prenom like :filtre or competence like :filtre or email like :filtre or tel like :filtre ;";
    $donnees = array(":filtre" => "%" . $filtre . "%");
    $select = $this->unPDO->prepare($requete);
    $select->execute($donnees);
    return $select->fetchAll();
}

	public function insertTechnicien ($tab){
		$requete ="insert into technicien values (null, :nom, :prenom, :competence, :email, :tel);" ;
		$donnees =array(
			":nom"=>$tab['nom'], 
			":prenom"=>$tab['prenom'], 
			":competence"=>$tab['competence'], 
			":email"=>$tab['email'],
			":tel"=>$tab['tel']
			);
		$select = $this->unPDO->prepare ($requete); 
		$select->execute ($donnees); 
	}

	public function deleteTechnicien($idtechnicien){
		$requete ="delete from technicien where idtechnicien = :idtechnicien ; " ;
		$donnees =array(":idtechnicien"=>$idtechnicien);
		$select = $this->unPDO->prepare ($requete); 
		$select->execute ($donnees); 
	}

	public function selectWhereTechnicien($idtechnicien){
		$requete = "select * from technicien where idtechnicien=:idtechnicien;" ;
		$donnees =array(":idtechnicien"=>$idtechnicien);
		$select = $this->unPDO->prepare ($requete); 
		$select->execute ($donnees);
		$unTechnicien = $select->fetch ();
		return $unTechnicien;
	}

	public function updateTechnicien ($tab){
		$requete="update technicien set nom= :nom, prenom= :prenom, competence= :competence, email= :email, 
		tel= :tel where idtechnicien= :idtechnicien ;";
		$donnees=array(
			":nom"=>$tab['nom'], 
			":prenom"=>$tab['prenom'], 
			":competence"=>$tab['competence'], 
			":email"=>$tab['email'],
			":tel"=>$tab['tel'],
			":idtechnicien"=>$tab['idtechnicien']
			);
		$select = $this->unPDO->prepare ($requete);
		$select->execute ($donnees);
	}


    public function countTechniciens () {
        $requete = "select count(*) as nb from technicien;";
        $select = $this->unPDO->prepare ($requete);
        $select->execute();
        return $select->fetch();
    }



		/************ Gestion des interventions **************/
	public function selectAllInterventions (){
		$requete ="select * from intervention ; " ;
		$select = $this->unPDO->prepare ($requete); 
		$select->execute (); 
		return $select->fetchAll();  
	}

	public function insertIntervention ($tab){
		$requete ="insert into intervention values (null, :descriptionInter, :dateInter, :prixInter, :idobjet,:idtechnicien);" ;
		$donnees =array(	":descriptionInter"=>$tab['descriptionInter'], 
							":dateInter"=>$tab['dateInter'], 
							":prixInter"=>$tab['prixInter'], 
							":idobjet"=>$tab['idobjet'],
							":idtechnicien"=>$tab['idtechnicien'] 
						);
		$select = $this->unPDO->prepare ($requete); 
		$select->execute ($donnees); 
	}

	public function searchAllInterventions ($filtre){
		$requete ="select * from intervention where descriptionInter like :filtre or dateInter like :filtre or prixInter like :filtre or idobjet like :filtre
		or idtechnicien like :filtre ;" ;
		$donnees=array(":filtre"=> "%".$filtre."%");
		$select = $this->unPDO->prepare ($requete); 
		$select->execute ($donnees); 
		return $select->fetchAll();
	}

	public function deleteIntervention($idintervention){
		$requete ="delete from intervention where idintervention = :idintervention ; " ;
		$donnees =array(":idintervention"=>$idintervention);
		$select = $this->unPDO->prepare ($requete); 
		$select->execute ($donnees);
	}

	public function selectWhereInterventions ($idintervention){
		$requete = "select * from intervention where idintervention=:idintervention;" ;
		$donnees =array(":idintervention"=>$idintervention);
		$select = $this->unPDO->prepare ($requete); 
		$select->execute ($donnees);
		$unIntervention = $select->fetch ();
		return $unIntervention;
	}

	public function updateIntervention($tab){
		$requete="update intervention set descriptionInter= :descriptionInter, dateInter= :dateInter, prixInter= :prixInter, idobjet= :idobjet, 
		idtechnicien= :idtechnicien where idintervention= :idintervention ;";
		$donnees=array(
			":descriptionInter"=>$tab['descriptionInter'], 
			":dateInter"=>$tab['dateInter'], 
			":prixInter"=>$tab['prixInter'], 
			":idobjet"=>$tab['idobjet'],
			":idtechnicien"=>$tab['idtechnicien'],
			":idintervention"=>$tab['idintervention']
			);
		$select = $this->unPDO->prepare ($requete);
		$select->execute ($donnees);
	}

    
    	public function countInterventions() {
        $requete = "select count(*) as nb from intervention;";
        $select = $this->unPDO->prepare ($requete);
        $select->execute();
        return $select->fetch();
    }

    /*
    public function selectAllInscriptions () {
        $requete="select * from inscription ;";
        $select = $this->unPDO->prepare ($requete);
        $select->execute();
        return $select->fetchAll();
    }
    */

	}
?>