<?php

class Client
{

    private $parametre = []; // Tableau = $_REQUEST

    private $oController; // objet

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

        $this->oController = new ClientController($this->parametre);
    }

    public function choixAction()
    {
        // Si variable (clef) action existe alors structure switch
        // Sinon par défaut lister()
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

                case 'form_commander' :

                    $this->oController->form_commander();
                    break;

                case 'commander' :

                    $this->oController->commander();
                    break;
            }
        } else {
            $this->oController->lister();
        }
    }
}