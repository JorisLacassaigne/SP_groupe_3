<?php

namespace mod_recette;

use mod_recette\controleur\RecetteControleur;

class Recette
{

    private $parametre = []; // Tableau = $_REQUEST

    private $oControleur; // objet

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

        $this->oControleur = new RecetteControleur($this->parametre);
    }

    public function choixAction()
    {
        if (isset($this->parametre['action'])) {

            switch ($this->parametre['action']) {

                case 'form_recette':

                    $this->oControleur->form_recette();
                    break;
            }
        }

    }
}