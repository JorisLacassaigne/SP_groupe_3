<?php

class PanierVue
{
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

        $this->tpl->assign('viderPanier', "viderPanier");

        $this->tpl->assign('login', $_SESSION['prenomNom']);


    }

    public function genererAffichageListe($panier)
    {

        $this->chargementPrincipal();

        $this->tpl->assign('titrePage', 'Panier');

        $this->tpl->assign('panier', $_SESSION['panier']);

        $this->tpl->assign('produit', $panier);

        $this->tpl->assign('readonly', '');

        $this->tpl->display('mod_panier/vue/panierFicheVue.tpl');

    }

    public function genererAffichageSauvegarde($panier)
    {

        $this->chargementPrincipal();

        switch ($this->parametre['action']) {

            case 'panierSauvegarder':
            case 'sauvegarder':

                $this->tpl->assign('action', 'panierSauvegarder');

                $this->tpl->assign('titrePage', 'Fiche panier : Création');

                $this->tpl->assign('panier', $_SESSION['panier']);

                $this->tpl->assign('produit', $panier);

                $this->tpl->assign('npc', $panier->getNpc());

                $this->tpl->assign('readonly', '');

                $this->tpl->display('mod_panier/vue/panierSauvegarderVue.tpl');

                break;
        }
    }
}