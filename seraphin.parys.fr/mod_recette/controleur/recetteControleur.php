<?php

namespace mod_recette\controleur;

use mod_recette\modele\RecetteModele;
use mod_recette\vue\RecetteVue;

class RecetteControleur
{

    private $parametre = []; // $_REQUEST
    private $oVue; // objet
    private $oModele; // objet

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

        $this->oModele = new RecetteModele($this->parametre);

        $this->oVue = new RecetteVue($this->parametre);
    }


    public function form_recette()
    {
        $recette = $this->oModele->getListeRecette();

        $this->oVue->genererAffichageFiche($recette);
    }


}