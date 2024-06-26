<?php


class Commande
{

    private $parametre = []; // Tableau = $_REQUEST

    private $oController; // objet


    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oController = new CommandeController($this->parametre);
    }


    public function choixAction(){

        // Structure switch : ajouter, modifier, supprimer (Pour une orientation en écriture BD)
        // form_ajouter, form_modifier, form_consulter,...
        // Par défaut, si aucune action précisée alors  => lister()

        // Si variable (clé) action existe alors structure switch
        // Sinon par défaut lister()
        if (isset($this->parametre['action'])){

            switch ($this->parametre['action']){

                case 'form_consulter':

                    $this->oController->form_consulter();
                    break;

                case 'form_ajouter':

                    $this->oController->form_ajouter();
                    break;


                case 'form_modifier':

                    $this->oController->form_modifier();
                    break;


                case 'form_supprimer':

                    $this->oController->form_supprimer();
                    break;


                case 'ajouter':

                    $this->oController->ajouter();
                    break;


                case 'modifier':

                    $this->oController->modifier();
                    break;


                case 'supprimer':

                    $this->oController->supprimer();
                    break;



            }

        } else {

            $this->oController->lister();

        }

    }

}