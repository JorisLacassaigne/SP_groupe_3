<?php

class ClientModele extends Modele
{

    private $parametre = []; // $_REQUEST

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }


    public function getListeClient()
    {

        $sql = 'SELECT * FROM client';

        $idRequete = $this->executeRequete($sql);

        if ($idRequete->rowCount() > 0) {
            // Création du tableau d'objets
            while ($unCLient = $idRequete->fetch(PDO::FETCH_ASSOC)) {

                $listeClients[] = new ClientTable($unCLient);
            }

            return $listeClients;

        } else {

            return null;
        }
    }

    public function getUnClient()
    {

        $sql = 'SELECT * FROM client WHERE codec = ?';
        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codec'],
        ]);

        $leCLient = new ClientTable($idRequete->fetch(PDO::FETCH_ASSOC));

        return $leCLient;
    }

    public function addClient(ClientTable $unClient)
    {

        $sql = 'INSERT INTO client(nom, prenom, adresse, cp, ville, telephone, motdepasse, email) VALUES (?,?,?,?,?,?,?,?)';
        $idRequete = $this->executeRequete($sql, [
            $unClient->getNom(),
            $unClient->getAdresse(),
            $unClient->getCp(),
            $unClient->getVille(),
            $unClient->getTelephone(),
            $unClient->getPrenom(),
            $unClient->getMotdepasse(),
            $unClient->getEmail(),
        ]);
        if ($idRequete) {
            ClientTable::setMessageSucces("Ajout effectué avec succès.");
        }
    }


    public function editClient(ClientTable $unClient)
    {

        $sql = 'UPDATE client SET nom = ?, adresse = ?, cp = ?, ville = ?, telephone = ?, premom = ?, motdepasse = ?, email = ? WHERE codec = ?';
        $idRequete = $this->executeRequete($sql, [
            $unClient->getNom(),
            $unClient->getAdresse(),
            $unClient->getCp(),
            $unClient->getVille(),
            $unClient->getTelephone(),
            $unClient->getCodec(),
            $unClient->getPrenom(),
            $unClient->getMotdepasse(),
            $unClient->getEmail(),
        ]);
        if ($idRequete) {
            ClientTable::setMessageSucces("Modification effectuée avec succès.");
        }
    }

    public function suppressionPossible()
    {

        $sql = 'SELECT COUNT(codec) AS nombre FROM commande Where codec = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codec'],
        ]);
        $row = $idRequete->fetch(PDO::FETCH_ASSOC);
        if ($row['nombre'] > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function deleteClient()
    {

        $sql = 'DELETE FROM client WHERE codec = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codec'],
        ]);
        if ($idRequete) {
            ClientTable::setMessageSucces("Suppression effectuée avec succès.");
        }
    }

    public function stat01(ClientTable $enCours)
    {

        $sql = 'SELECT SUM(totalHT) AS st01 FROM commande WHERE codec = ?';

        $idRequete = $this->executeRequete($sql, [
            $enCours->getCodec(),
        ]);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        if ($row['st01'] != null) {
            $enCours->setStat01($row['st01']);
        } else {
            $enCours->setStat01(0);
        }
    }

    public function stat02(ClientTable $enCours)
    {

        $sql = 'SELECT ROUND(SUM(totalHT)/ (SELECT SUM(totalHT) FROM commande) *100, 2) AS st02 FROM `commande` WHERE codec = ?';

        $idRequete = $this->executeRequete($sql, [
            $enCours->getCodec(),
        ]);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        if ($row['st02'] != null) {
            $enCours->setStat02($row['st02']);
        } else {
            $enCours->setStat02(0);
        }
    }

    public function commandeClient(){

    }

}