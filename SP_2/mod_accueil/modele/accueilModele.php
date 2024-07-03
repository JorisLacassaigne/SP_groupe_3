<?php

class AccueilModele extends Modele {

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

        $leProfil = new AccueilTable($unProfil);

        return $leProfil;

    }

    public function stat01(AccueilTable $enCours)
    {
        $sql = 'SELECT SUM(totalHT) as stat01 FROM `commande` WHERE codev=?';
        $idRequete = $this->executeRequete($sql, [
            $_SESSION['codev'],
        ]);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        if ($row['stat01'] != null) {
            $enCours->setStat01($row['stat01']);
        } else {
            $enCours->setStat01(0);
        }
    }
    public function stat02(AccueilTable $enCours)
    {
        $sql = 'SELECT COUNT(codec) as stat02 FROM client;';
        $idRequete = $this->executeRequete($sql);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        if ($row['stat02'] != null) {
            $enCours->setStat02($row['stat02']);
        } else {
            $enCours->setStat02(0);
        }
    }
    public function stat03(AccueilTable $enCours)
    {
        $sql = 'SELECT COUNT(reference) as stat03 FROM produit;';
        $idRequete = $this->executeRequete($sql);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        if ($row['stat03'] != null) {
            $enCours->setStat03($row['stat03']);
        } else {
            $enCours->setStat03(0);
        }
    }
    public function stat04(AccueilTable $enCours)
    {
        $sql = 'SELECT SUM(totalHT) AS stat04 FROM commande';
        $idRequete = $this->executeRequete($sql);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        if ($row['stat04'] != null) {
            $enCours->setStat04($row['stat04']);
        } else {
            $enCours->setStat04(0);
        }
    }
}
