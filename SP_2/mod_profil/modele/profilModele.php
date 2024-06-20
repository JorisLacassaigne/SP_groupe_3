<?php

class ProfilModele extends Modele
{
    private $parametre = []; // $_REQUEST

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }

    public function getListeProfil()
    {

        $sql = 'SELECT * FROM vendeur WHERE codev = ?';

        $idRequete = $this->executeRequete($sql, [
            $_SESSION['codev'],
        ]);

        // Création du tableau d'objets
        $unProfil = $idRequete->fetch(PDO::FETCH_ASSOC);

        $leProfil = new ProfilTable($unProfil);

        return $leProfil;

    }

    public function editProfil(ProfilTable $leProfil)
    {
        $sql = 'UPDATE vendeur SET nom = ?, prenom= ?, adresse = ?, cp = ?, ville = ?, telephone = ?, login = ?, motdepasse = ? WHERE codev = ?';
        $idRequete = $this->executeRequete($sql, [
            $leProfil->getNom(),
            $leProfil->getPrenom(),
            $leProfil->getAdresse(),
            $leProfil->getCp(),
            $leProfil->getVille(),
            $leProfil->getTelephone(),
            $leProfil->getLogin(),
            $leProfil->getMotdepasse(),
            $leProfil->getCodev(),
        ]);
        if ($idRequete) {
            ProfilTable::setMessageSucces("Modification effectuée avec succès.");
        }
    }

    public function stv01(profilTable $enCours){
        $sql = 'SELECT SUM(totalHT) as stv01 FROM `commande` WHERE codev=?';
        $idRequete = $this->executeRequete($sql, [
            $_SESSION['codev'],
        ]);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        if ($row['stv01'] != null) {
            $enCours->setstv01($row['stv01']);
        } else {
            $enCours->setstv01(0);
        }
    }

    public function editMotdepasse()
    {

        $sql = 'SELECT motdepasse FROM vendeur WHERE codev = ?';
        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codev'],
        ]);

        $leProfil = new ProfilTable($idRequete->fetch(PDO::FETCH_ASSOC));

        return $leProfil;
    }
}