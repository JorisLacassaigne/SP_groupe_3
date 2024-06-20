<?php
class PanierVue{
    private $parametre = []; // $_REQUEST

    private $tpl; // Object

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

        $this->tpl = new Smarty();
    }

    public function chargementPrincipal()
    {

        $this->tpl->assign('titrePrincipal', "Séraphin PARYS");

        $this->tpl->assign('deconnexion', "Déconnexion");

        $this->tpl->assign('login', $_SESSION['prenomNom']);


    }

    public function genererAffichageListe($panier)
    {

        $this->chargementPrincipal();

        $this->tpl->assign('titrePage', 'Panier');

        $this->tpl->assign('panier', $_SESSION['panier']);

        $this->tpl->display('mod_panier/vue/panierFiche.tpl');


    }

}