<?php

class Produit
{

    private $parametre = []; // Tableau = $_REQUEST

    private $oController; // objet

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

        $this->oController = new ProduitController($this->parametre);
    }

    public function choixAction()
    {
        if (isset($this->parametre['action'])) {
            switch ($this->parametre['action']) {

                case 'form_consulter':

                    $this->oController->form_consulter();
                    break;

                case 'form_ajouter':

                    $this->oController->form_ajouter();
                    break;

                case 'ajouter' :

                    $this->oController->ajouter();
                    break;

                case 'form_modifier' :

                    $this->oController->form_modifier();
                    break;

                case 'modifier' :

                    $this->oController->modifier();
                    break;

                case 'form_supprimer' :

                    $this->oController->form_supprimer();
                    break;

                case 'supprimer' :

                    $this->oController->supprimer();
                    break;

            }
        } else {
            $this->oController->lister();
        }
    }
}