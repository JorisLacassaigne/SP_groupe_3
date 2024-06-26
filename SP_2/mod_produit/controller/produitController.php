<?php

class ProduitController
{

    private $parametre = []; // $_REQUEST
    private $oVue; // objet
    private $oModele; // objet

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

        $this->oModele = new ProduitModele($this->parametre);

        $this->oVue = new ProduitVue($this->parametre);
    }


    public function lister()
    {

        $produits = $this->oModele->getListeProduit();

        $this->oVue->genererAffichageListe($produits);
    }

    public function lister_produits()
    {
        $tousLesProduits = $this->oModele->getListeProduit();

        $this->oVue->genererAffichageListeTousLesProduits($tousLesProduits);
    }

    public function form_consulter()
    {
        $produit = $this->oModele->getUnProduit();

        $this->oVue->genererAffichageFiche($produit);
    }

    public function ajouter_panier($reference, $quantite)
    {
        $this->oModele->ajouter_panier($reference, $quantite);

        header('Location: index.php?gestion=produit&action=lister_produits');
    }


}