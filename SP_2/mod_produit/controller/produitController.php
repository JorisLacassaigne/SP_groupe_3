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

    public function ajout_panier($reference, $quantite)
    {
        // produitController.php

// Supposez que $reference et $quantite sont obtenus depuis vos paramètres POST ou GET
        $reference = $this->parametre['reference'];
        $quantite = $this->parametre['quantite'];

// Création d'un objet ProduitTable avec les données nécessaires
        $produitTable = new ProduitTable();
        $produitTable->setReference($reference);
        $produitTable->setQuantite($quantite);

// Appel de la méthode addPanier avec l'objet ProduitTable
        $produitTable = new ProduitModele($produitTable);
        $produitTable = $this->oModele->addPanier($reference,$quantite);

    }


}