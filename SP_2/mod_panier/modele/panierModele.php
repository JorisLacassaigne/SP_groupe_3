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
        $sql = 'SELECT concat(nom," ", prenom) AS npc FROM client';

        $idRequete = $this->executeRequete($sql);

        $npctab = array();
        while ($npc = $idRequete->fetch(PDO::FETCH_ASSOC)) {
            $npctab[] = $npc['npc'];
        }
        $enCours->setNpc($npctab);
//        var_dump($npctab);

    }

    public function nomPClient()
    {
        $sql = 'SELECT concat(nom," ", prenom) AS npc FROM client';

        $idRequete = $this->executeRequete($sql);

        $npctab = array();
        while ($npc = $idRequete->fetch(PDO::FETCH_ASSOC)) {
            $npctab[] = $npc['npc'];
        }
//        var_dump($npctab);

        $enCours=new ClientTable();
        $enCours->setNom('nom');
        $enCours->setPrenom('prenom');

        return $enCours;
    }

    public function addCommande(PanierTable $uneCommande)
    {
        $sql = 'INSERT INTO commande(numero, codev, codec, datelivraison, dateCommande, totalHT, totalTVA, etat) VALUES (?,?,?,?,?,?,?,?)';
        $idRequete = $this->executeRequete($sql, [
            $uneCommande->getNumero(),
            $uneCommande->getCodev(),
            $uneCommande->getCodec(),
            $uneCommande->getDateLivraison(),
            $uneCommande->getDateCommande(),
            $uneCommande->getTotalHT(),
            $uneCommande->getTotalTVA(),
            $uneCommande->getEtat(),

        ]);
        if ($idRequete) {
            ClientTable::setMessageSucces("Ajout effectué avec succès.");
        }
    }
}