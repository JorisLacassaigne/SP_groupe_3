<?php

class AccueilVue{

    private $parametre = []; // Un tableau associatif contenant le tableau $_REQUEST

    private $tpl; // Object de type Smarty

    public function __construct($parametre){
        // Initialisation de la propriété $parametre ($_REQUEST)
        $this->parametre = $parametre;

        $this->tpl = new Smarty();

//        $titrePrincipal = "Séraphin PARYS";
//
//        require_once 'mod_accueil/vue/vue.php';
    }

    public function chargementPrincipal()
    {
        $this->tpl->assign('titrePrincipal', "Séraphin PARYS");

        $this->tpl->assign('deconnexion', "Déconnexion");

        $this->tpl->assign('viderPanier', "viderPanier");

        $this->tpl->assign('login', $_SESSION['prenomNom']);
    }

    public function genererAffichageStats($tabBord)
    {
        $this->chargementPrincipal();

        $this->tpl->assign('titrePage', 'Accueil');

        $this->tpl->assign('tabBord', $tabBord);

        $this->tpl->display('mod_accueil/vue/accueilVue.tpl');
    }
}
