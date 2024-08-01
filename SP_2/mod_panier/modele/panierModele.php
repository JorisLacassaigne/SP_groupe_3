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

    public function statMontantCommande(PanierTable $enCours)
    {

        $sql = 'SELECT ROUND(SUM(prixUnitaireHT *10), 2) as stat01 FROM `produit` WHERE reference = ?;';

        $idRequete = $this->executeRequete($sql, [
            $enCours->getReference(),
        ]);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        $enCours->setStat01($row['stat01']);
    }

    public function statTVA(PanierTable $enCours)
    {

        $sql = 'SELECT ROUND(SUM(prixUnitaireHT *10 /5), 2) as stat02 from produit where reference = ?';

        $idRequete = $this->executeRequete($sql, [
            $enCours->getReference(),
        ]);
        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        $enCours->setStat02($row['stat02']);
    }

    public function statMarge(PanierTable $enCours)
    {

        $sql = 'SELECT ROUND(SUM(prixUnitaireHT *10 /5 * 1.357),2) as stat03 from produit where reference = ?';

        $idRequete = $this->executeRequete($sql, [
            $enCours->getReference(),
        ]);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        $enCours->setStat03($row['stat03']);
    }


    public function nomPrenomClient(PanierTable $enCours)
    {
        $sql = 'SELECT concat(codec, " - ", nom," ", prenom) AS npc FROM client';

        $idRequete = $this->executeRequete($sql);

        $npctab = array();
        while ($npc = $idRequete->fetch(PDO::FETCH_ASSOC)) {
            $npctab[] = $npc['npc'];
        }
        $codec = explode(" - ", $npctab[0])[0];
        $enCours->setNpc($npctab);
//        var_dump($codec);

    }

    public function validerCommande(PanierTable $uneCommande)
    {
//        $codec = $_POST['comboClient'];
//        $codec = explode(" - ", $codec)[0];
//        $codec = (int)$codec;
//        var_dump($codec);

        $sql = "INSERT INTO commande (codev, codec, datelivraison, dateCommande, totalHT, totalTVA, etat)
            VALUES (?, 61, ?, ?, ?, ?, 0)";

        $idRequete = $this->executeRequete($sql, [
            $_SESSION['codev'],
//            $codec,
            $uneCommande->getDateLivraison(),
            $uneCommande->getDateCommande(),
            $uneCommande->getTotalHT(),
            $uneCommande->getTotalTVA()
        ]);

        if ($idRequete) {
            ClientTable::setMessageSucces("Ajout effectué avec succès.");
        }
    }

}