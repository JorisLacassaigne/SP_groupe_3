<?php
Class VendeurModele extends Modele{

    private $parametre = []; //$_REQUEST

    public function __construct($parametre){

        $this->parametre = $parametre;
    }


    public function getListeVendeurs(){

        $sql = 'SELECT * FROM vendeur';

        $idRequete = $this->executeRequete($sql);

        if($idRequete->rowCount() > 0){
            // Création du tableau d'objets
            while($unVendeur = $idRequete->fetch(PDO::FETCH_ASSOC)){

                $listeVendeurs[] = new VendeurTable($unVendeur);
            }

            return $listeVendeurs;

        }else{

            return null;
        }

    }

    public function getUnVendeur(){

        $sql = 'SELECT * FROM vendeur WHERE codev = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codev'],
        ]);

        $leVendeur = new VendeurTable($idRequete->fetch(PDO::FETCH_ASSOC));

        return $leVendeur;

    }

    public function addVendeur(VendeurTable $unVendeur){

        $sql='INSERT INTO vendeur (nom, prenom, adresse, cp, ville, telephone) VALUES (?,?,?,?,?,?)';

        $idRequete = $this->executeRequete($sql, [
            $unVendeur->getNom(),
            $unVendeur->getPrenom(),
            $unVendeur->getAdresse(),
            $unVendeur->getCp(),
            $unVendeur->getVille(),
            $unVendeur->getTelephone(),
        ]);

        if($idRequete){
            VendeurTable::setMessageSucces("Ajout effectué avec succès.");
        }
    }


    public function editVendeur(VendeurTable $unVendeur){

        $sql = 'UPDATE vendeur SET nom = ?, prenom = ?, adresse = ?, cp = ? , ville = ?, telephone = ? WHERE codev = ? ';

        $idRequete = $this->executeRequete($sql, [
            $unVendeur->getNom(),
            $unVendeur->getPrenom(),
            $unVendeur->getAdresse(),
            $unVendeur->getCp(),
            $unVendeur->getVille(),
            $unVendeur->getTelephone(),
            $unVendeur->getCodev(),
        ]);

        if($idRequete){
            VendeurTable::setMessageSucces("Modification effectuée avec succès.");
        }

    }


    public function deleteVendeur(){

        $sql = 'DELETE FROM vendeur WHERE codev = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codev'],
        ]);

        if($idRequete){

            VendeurTable::setMessageSucces("Suppression effectuée avec succès.");

        }
    }

    public function stat01(VendeurTable $enCours){
        $sql ='SELECT SUM(totalHT) AS st01 FROM commande WHERE codev = ?';
        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codev'],
            ]);
        $row= $idRequete-> fetch(PDO::FETCH_ASSOC);
        if ($row['st01'] != null){
            $enCours->setStat01($row['st01']);

        }else{
            $enCours->setStat01(0);
        }
    }

}