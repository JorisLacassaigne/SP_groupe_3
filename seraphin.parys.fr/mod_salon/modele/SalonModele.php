<?php
Class SalonModele extends Modele{

    private $parametre = []; //$_REQUEST

    public function __construct($parametre){

        $this->parametre = $parametre;
    }


    public function getListeSalon(){

        $sql = 'SELECT * FROM salon';

        $idRequete = $this->executeRequete($sql);

        if($idRequete->rowCount() > 0){
            // Création du tableau d'objets
            while($unSalon = $idRequete->fetch(PDO::FETCH_ASSOC)){

                $listeSalons[] = new SalonTable($unSalon);
            }

            return $listeSalons;

        }else{

            return null;
        }

    }

    public function getUnSalon(){

        $sql = 'SELECT * FROM salon WHERE codes = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codes'],
        ]);

        $leSalon = new SalonTable($idRequete->fetch(PDO::FETCH_ASSOC));

        return $leSalon;

    }

    public function addSalon(SalonTable $unSalon){

        $sql='INSERT INTO salon (nom, adresse, cp, ville, telephone, datedebut,datefin, lien) VALUES (?,?,?,?,?,?,?,?)';

        $idRequete = $this->executeRequete($sql, [
            $unSalon->getNom(),
            $unSalon->getAdresse(),
            $unSalon->getCp(),
            $unSalon->getVille(),
            $unSalon->getTelephone(),
            $unSalon->getDatedebut(),
            $unSalon->getDatefin(),
            $unSalon->getLien(),
        ]);

        if($idRequete){
            SalonTable::setMessageSucces("Ajout a été effectué avec succès.");
        }
    }


    public function editSalon(SalonTable $unSalon){

        $sql = 'UPDATE salon SET nom = ?, adresse = ?, cp = ? , ville = ?, telephone = ?, datedebut= ?, datefin= ?, lien= ? WHERE codes = ? ';

        $idRequete = $this->executeRequete($sql, [
            $unSalon->getNom(),
            $unSalon->getAdresse(),
            $unSalon->getCp(),
            $unSalon->getVille(),
            $unSalon->getTelephone(),
            $unSalon->getCodes(),
            $unSalon->getDatedebut(),
            $unSalon->getDatefin(),
            $unSalon->getLien(),
        ]);

        if($idRequete){
            SalonTable::setMessageSucces("Modification effectuée avec succès.");
        }

    }

    public function suppressionPossible(){

        $sql = 'SELECT * FROM  WHERE codes = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codes'],
            ]);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        if($row['nombre'] > 0){

            return false;

        }else{

            return true;
        }
    }


    public function deleteSalon(){

        $sql = 'DELETE FROM salon WHERE codes = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codes'],
        ]);

        if($idRequete){

            SalonTable::setMessageSucces("Suppression effectuée avec succès.");

        }
    }

    public function stat01(SalonTable $enCours){
        $sql ='SELECT *  FROM salon WHERE  lien';
        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codes'],
            ]);
        $row= $idRequete-> fetch(PDO::FETCH_ASSOC);
        if ($row['st01'] != null){
            $enCours->setStat01($row['st01']);

        }else{
            $enCours->setStat01(0);
        }
    }

}