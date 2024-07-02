<?php

class Accueil{

    private $parametre = []; // Un tableau associatif contenant le tableau $_REQUEST

    private $oController; // Objet instance du controller

    public function __construct($parametre){
        // Initialisation de la propriété $parametre ($_REQUEST)
        $this->parametre = $parametre;
        // Chargement du script accueilController.php
        // require_once 'mod_accueil/controller/accueilController.php';
        // Création d'une instance (objet) de type AccueilController
        $this->oController = new AccueilController($parametre);

    }

    public function choixAction(){
        // Structure switch : ajouter, modifier, supprimer (Pour une orientation en écriture BD)
        // form_ajouter, form_modifier, formConsulter,...
        // Par défaut, si aucune action précisée alors  => lister()
        $this->oController->lister();

    }




}
