<?php

class PanierController
{

    private $parametre = []; // $_REQUEST
    private $oVue; // Object
    private $oModele; // Object

    public function __construct($parametre)
    {
        $this->parametre = $parametre;

        $this->oModele = new PanierModele($this->parametre);

        $this->oVue = new PanierVue($this->parametre);
    }

    public function lister()
    {

        $panier = $this->oModele->getfichePanier();
        $this->oModele->statMontantCommande($panier);
        $this->oModele->statTVA($panier);
        $this->oModele->statMarge($panier);

//        var_dump($panier);

        $this->oVue->genererAffichageListe($panier);
    }

    public function form_sauvegarder()
    {
        $panier = $this->oModele->getfichePanier();

        $this->oModele->nomPrenomClient($panier);
        $codec = $panier->getCodec();


        $this->oVue->genererAffichageSauvegarde($panier);
    }


    public function ajouter()
    {
        $controleCommande = new PanierTable($this->parametre);

        if ($controleCommande->getAutorisationBD() == false) {

            $this->oVue->genererAffichageSauvegarde($controleCommande);

        } else {

            $this->oModele->validerCommande($controleCommande);

            $this->lister();
        }
    }
}

//codev 			via $_SESSION['login']
//codec 			via le npc
//dateLivraison		via valeur A FAIRE
//dateCommande		via valeur A FAIRE
//totalHT			via valeur
//totalTVA		via valeur
//etat = 			false