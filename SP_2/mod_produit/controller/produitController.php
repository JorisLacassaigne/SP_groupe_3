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

    public function ajouter_panier()
    {
        $reference = $this->parametre['reference'];
        $quantite = $this->parametre['quantite'];

        $produits = $this->oModele->addPanier($reference, $quantite);

        if ($produits !== null) {
            // Rediriger l'utilisateur vers la page de confirmation ou de panier
            header('Location: index.php?gestion=panier&action=confirmation');
        } else {
            // Gérer l'erreur si le produit n'a pas pu être ajouté au panier
            echo "Erreur : le produit n'a pas pu être ajouté au panier.";
        }
    }



}