<?php
class Panier {
    private $parametre = []; // Tableau = $_REQUEST

    private $oController; // objet


    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oController = new PanierController($this->parametre);
    }

    public function choixAction(){
        $this->oController->lister();
    }
}