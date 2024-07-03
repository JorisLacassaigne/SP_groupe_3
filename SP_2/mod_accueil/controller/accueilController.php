<?php

class AccueilController
{

    private $parametre = []; // $_REQUEST
    private $oVue; // objet
    private $oModele; // objet

    public function __construct($parametre)
    {
        // Initialisation de la propriété $parametre ($_REQUEST)
        $this->parametre = $parametre;

        $this->oModele = new AccueilModele($this->parametre);
        // Chargement du script accueilVue.php
        require_once 'mod_accueil/vue/accueilVue.php';
        // Instanciation de la classe accueilVue
        $this->oVue = new AccueilVue($this->parametre);
    }


    public function lister()
    {
        $tabBord = $this->oModele->getListeProfil();
        $this->oModele->stat01($tabBord);
        $this->oModele->stat02($tabBord);
        $this->oModele->stat03($tabBord);
        $this->oModele->stat04($tabBord);
//            var_dump($tabBord);
        $this->oVue->genererAffichageStats($tabBord);
    }

}
