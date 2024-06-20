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

    public function form_consulter()
    {
        $produit = $this->oModele->getUnProduit();

        $this->oVue->genererAffichageFiche($produit);
    }

    public function form_ajouter()
    {
        $prepareProduit = new ProduitTable();

        $this->oVue->genererAffichageFiche($prepareProduit);
    }

    public function form_modifier()
    {
        $produit = $this->oModele->getUnProduit();

        $this->oVue->genererAffichageFiche($produit);
    }


    public function ajouter()
    {

        $controleProduit = new ProduitTable($this->parametre);

        if ($controleProduit->getAutorisationBD() == false) {

            $this->oVue->genererAffichageFiche($controleProduit);

        } else {

            $this->oModele->addProduit($controleProduit);

            $this->lister();
        }
    }

    public function modifier()
    {

        $controleProduit = new ProduitTable($this->parametre);

        if ($controleProduit->getAutorisationBD() == false) {

            $this->oVue->genererAffichageFiche($controleProduit);

        } else {

            $this->oModele->editProduit($controleProduit);

            $this->lister();
        }
    }

    public function form_supprimer()
    {
        $produit = $this->oModele->getUnProduit();

        $this->oVue->genererAffichageFiche($produit);
    }

    public function supprimer()
    {

        $this->oModele->deleteProduit();

        $this->lister();

    }


}