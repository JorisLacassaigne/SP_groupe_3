<?php
class PanierController
{

    private $parametre = []; // $_REQUEST
    private $oVue; // Object
    private $oModele; // Object

    public function __construct($parametre)
    {
        $this->parametre = $parametre;

        $this->oModele = new PanierModele($this->parametre);

        $this->oVue = new PanierVue($this->parametre);
    }

    public function lister()
    {

        $panier = $this->oModele->getfichePanier();

        $this->oVue->genererAffichageListe($panier);
    }

}