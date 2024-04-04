<?php
Class ServiceModele extends Modele{

    private $parametre = []; //$_REQUEST

    public function __construct($parametre){

        $this->parametre = $parametre;
    }


    public function getListeServices(){

        $sql = 'SELECT * FROM service';

        $idRequete = $this->executeRequete($sql);

        if($idRequete->rowCount() > 0){
            // Création du tableau d'objets
            while($unService = $idRequete->fetch(PDO::FETCH_ASSOC)){

                $listeServices[] = new ServiceTable($unService);
            }

            return $listeServices;

        }else{

            return null;
        }

    }

    public function getUnService(){

        $sql = 'SELECT * FROM service WHERE codes = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codes'],
        ]);

        $leService = new ServiceTable($idRequete->fetch(PDO::FETCH_ASSOC));

        return $leService;

    }

    public function addService(ServiceTable $unService){

        $sql='INSERT INTO service (nom, description) VALUES (?,?)';

        $idRequete = $this->executeRequete($sql, [
            $unService->getNom(),
            $unService->getDescription(),
        ]);

        if($idRequete){
            ServiceTable::setMessageSucces("Ajout effectué avec succès.");
        }
    }


    public function editService(ServiceTable $unService){

        $sql = 'UPDATE service SET nom = ?, description = ? WHERE codes = ? ';

        $idRequete = $this->executeRequete($sql, [
            $unService->getNom(),
            $unService->getDescription(),
            $unService->getCodes(),
        ]);

        if($idRequete){
            ServiceTable::setMessageSucces("Modification effectuée avec succès.");
        }

    }

    public function editEtat(ServiceTable $unService){

        $sql = 'UPDATE service SET etat = ? WHERE codes = ? ';

        $idRequete = $this->executeRequete($sql, [
            $unService->getEtat(),
            $this->parametre['codes']
        ]);

        if($idRequete){
            ServiceTable::setMessageSucces("Modification de l'état effectuée avec succès.");
        }

    }


//    public function activateService(){
//
//        $sql = '';
//
//        $idRequete = $this->executeRequete($sql);
//
//        if($idRequete) {
//
//        }
//    }

    public function deleteService(){

        $sql = 'DELETE FROM service WHERE codes = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codes'],
        ]);

        if($idRequete){

            ServiceTable::setMessageSucces("Suppression effectuée avec succès.");

        }
    }

}