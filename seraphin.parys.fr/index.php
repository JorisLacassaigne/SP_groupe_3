<?php
session_start();

require_once 'include/configuration.php';

// Appel de l'autoloader

Autoloader::chargerClasse();

    if(!isset($_SESSION['login'])){

        $_REQUEST['gestion'] = 'authentification';

    }elseif(!isset($_REQUEST['gestion'])){
        // Ouverture par défaut
        $_REQUEST['gestion'] = 'accueil';
    }

//var_dump($_REQUEST);

//Création d'un objet instance du routeur appelé.
$oRouteur = new $_REQUEST['gestion']($_REQUEST);

$oRouteur->choixAction();








