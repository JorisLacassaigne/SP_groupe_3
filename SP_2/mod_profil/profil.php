<?php

class Profil
{
    private $parametre = []; // Tableau = $_REQUEST

    private $oController; // objet

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

        $this->oController = new ProfilController($this->parametre);
    }

    public function choixAction()
    {
        if (isset($this->parametre['action'])) {
            switch ($this->parametre['action']) {

                case 'modifier' :

                    $this->oController->modifier();
                    break;

                case 'valider' :

                    $this->oController->valider();
                    break;
            }
        } else {


            $this->oController->lister();
        }
    }
}