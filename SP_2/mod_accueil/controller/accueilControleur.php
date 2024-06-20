<?php

class AccueilController{

    private $parametre = []; // Un tableau associatif contenant le tableau $_REQUEST

    private $oVue; // Objet

    public function __construct($parametre){
        // Initialisation de la propriété $parametre ($_REQUEST)
        $this->parametre = $parametre;
        // Chargement du script accueilVue.php
         require_once 'mod_accueil/vue/accueilVue.php';
        // Instanciation de la classe accueilVue
        $this->oVue = new AccueilVue($this->parametre);
    }


    public function lister(){

        $this->oVue->genererAffichageListe();
    }

}
