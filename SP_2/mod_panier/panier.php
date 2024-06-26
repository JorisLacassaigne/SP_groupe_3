<?php

class Panier
{
    private $parametre = []; // Tableau = $_REQUEST

    private $oController; // objet


    public function __construct($parametre)
    {

        $this->parametre = $parametre;

        $this->oController = new PanierController($this->parametre);
    }

    public function choixAction()
    {
        if (isset($this->parametre['action'])) {
            switch ($this->parametre['action']) {

                case 'panierSauvegarder':

                    $this->oController->form_sauvegarder();
                    break;
                case 'sauvegarder' :

                    $this->oController->sauvegarder();
                    break;

            }
        } else {

            $this->oController->lister();
        }
    }
}