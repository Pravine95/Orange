<?php 
require_once("modele/modele.class.php");

class Controleur {
    private $unModele; 

    public function __construct (){
        $this->unModele = new modele(); // Utilise le nom de classe correct en minuscules.
    }


    public function verifConnexion($email, $mdp){
        return $this->unModele->verifConnexion($email, $mdp);
    }


    /************************ GESTION DES CLIENTS  *******************/
    public function selectAllClients () {
        return $this->unModele->selectAllClients(); // Utilise le nom de la méthode correcte.
    }

    public function searchAllClients ($filtre) {
        return $this->unModele->searchAllClients($filtre); // Utilise le nom de la méthode correcte.
    }

    public function insertClient ($tab){
        $this->unModele->insertClient($tab); // Utilisez le nom de la méthode correcte.
    }

    public function deleteClient ($idclient){
        $this->unModele->deleteClient($idclient); // Utilisez le nom de la méthode correcte.
    } 

    public function selectWhereClients ($idclient) {
        return $this->unModele->selectWhereClients($idclient); // Utilise le nom de la méthode correcte.
    }
    

    public function updateClient ($tab) {
        $this->unModele->updateClient ($tab); // Utilise le nom de la méthode correcte.
    }
    
    public function countClients() {
        return $this->unModele->countClients();
    }

    /************************ GESTION DES OBJETS *******************/
    public function selectAllObjets () {
        return $this->unModele->selectAllObjets (); // Utilisez le nom de la méthode correcte.
    }

    public function searchAllObjets ($filtre) {
        return $this->unModele->searchAllObjets($filtre); // Utilise le nom de la méthode correcte.
    }

    public function insertObjet($tab){
        $this->unModele->insertObjet($tab); // Utilisez le nom de la méthode correcte.
    }


    public function deleteObjet($idobjet){
        $this->unModele->deleteObjet($idobjet); // Utilisez le nom de la méthode correcte.
    } 

    public function selectWhereObjets ($idobjet) {
        return $this->unModele->selectWhereObjets($idobjet); // Utilise le nom de la méthode correcte.
    }
    

    public function updateObjet ($tab) {
        $this->unModele->updateObjet ($tab); // Utilise le nom de la méthode correcte.
    }



    public function countObjets() {
        return $this->unModele->countObjets();
    }





    /************************ GESTION DES TECHNICIENS *******************/
    public function selectAllTechniciens () {
        return $this->unModele->selectAllTechniciens(); // Utilisez le nom de la méthode correcte.
    }

    public function insertTechnicien($tab){
        $this->unModele->insertTechnicien($tab); // Utilisez le nom de la méthode correcte.
    }
    
     public function searchAllTechniciens ($filtre) {
        return $this->unModele->searchAllTechniciens($filtre); // Utilise le nom de la méthode correcte.
    }

     public function deleteTechnicien($idtechnicien){
        $this->unModele->deleteTechnicien($idtechnicien); // Utilisez le nom de la méthode correcte.
    } 

    public function selectWhereTechnicien ($idtechnicien) {
         return $this->unModele->selectWhereTechnicien($idtechnicien); // Utilise le nom de la méthode correcte.
    }
    

    public function updateTechnicien($tab) {
         return $this->unModele->updateTechnicien($tab); // Utilise le nom de la méthode correcte.
    }



    public function countTechniciens() {
        return $this->unModele->countTechniciens();
    }



    /************************ GESTION DES INTERVENTIONS*************/
    public function selectAllInterventions() {
        return $this->unModele->selectAllInterventions(); // Utilisez le nom de la méthode correcte.
    }

    public function insertIntervention($tab){
        $this->unModele->insertIntervention($tab); // Utilisez le nom de la méthode correcte.
    }

    public function searchAllInterventions ($filtre) {
        return $this->unModele->searchAllInterventions($filtre); // Utilise le nom de la méthode correcte.
    }

    public function deleteIntervention($idintervention){
        $this->unModele->deleteIntervention($idintervention); // Utilisez le nom de la méthode correcte.
    } 

    public function selectWhereInterventions ($idintervention) {
        return $this->unModele->selectWhereInterventions($idintervention); // Utilise le nom de la méthode correcte.
    }
    

    public function updateIntervention($tab) {
        $this->unModele->updateIntervention($tab); // Utilise le nom de la méthode correcte.
    }

    public function countInterventions() {
        return $this->unModele->countInterventions();
    }

    /*
    public function selectAllInscriptions () {
        return $this->unModele->selectAllInscriptions();
    }
    */
}
?>