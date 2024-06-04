<?php

class Client{

    private $parametre = []; // Tableau = $_REQUEST

    private $oControleur; // objet

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oControleur = new ClientControleur($this->parametre);
    }

    public function choixAction(){
        // Structure switch : ajouter, modifier, supprimer (Pour une orientation en écriture BD)
        // form_ajouter, form_modifier, form_consulter,...
        // Par défaut, si aucune action précisée alors  => lister()

        // Si variable (clé) action existe alors structure switch
        // Sinon par défaut lister()
        if(isset($this->parametre['action'])){

            switch($this->parametre['action']){

                case 'form_consulter':

                    $this->oControleur->form_consulter();
                    break;

                case 'form_ajouter':

                    $this->oControleur->form_ajouter();
                    break;

                case 'form_modifier':

                    $this->oControleur->form_modifier();
                    break;

                case 'form_supprimer':

                    $this->oControleur->form_supprimer();
                    break;

                case 'ajouter':

                    $this->oControleur->ajouter();
                    break;

                case 'modifier':

                    $this->oControleur->modifier();
                    break;

                case 'supprimer':

                    $this->oControleur->supprimer();
                    break;


            }



        }else{

            $this->oControleur->lister();
        }


    }


}
