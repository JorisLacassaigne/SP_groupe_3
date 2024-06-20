<?php

class PanierModele extends Modele
{
    private $parametre = []; //$_REQUEST

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }

    public function getListepanier()
    {

    }
}