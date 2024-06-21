<?php

class PanierModele extends Modele
{
    private $parametre = []; //$_REQUEST

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }

    public function getfichePanier()
    {
        $panier = new panierTable($_SESSION['panier']);
        return $panier;
    }

    public function statMontantCommande(PanierTable $enCours){

        $sql = 'SELECT ROUND(SUM(prixUnitaireHT *10), 2) as stat01 FROM `produit` WHERE reference = ?;';

        $idRequete = $this->executeRequete($sql, [
            $enCours->getReference(),
        ]);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        $enCours->setStat01($row['stat01']);
    }

    public function statTVA(PanierTable $enCours){

        $sql = 'SELECT ROUND(SUM(prixUnitaireHT *10 /5), 2) as stat02 from produit where reference = ?';

        $idRequete = $this->executeRequete($sql, [
            $enCours->getReference(),
        ]);
        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        $enCours->setStat02($row['stat02']);
    }

    public function statMarge(PanierTable $enCours){

        $sql = 'SELECT ROUND(SUM(prixUnitaireHT *10 /5 * 1.357),2) as stat03 from produit where reference = ?';

        $idRequete = $this->executeRequete($sql, [
            $enCours->getReference(),
        ]);


        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        $enCours->setStat03($row['stat03']);
    }

}