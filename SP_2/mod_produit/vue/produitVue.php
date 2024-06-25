<?php

class ProduitVue
{
    private
        $parametre = []; // $_REQUEST

    private
        $tpl; // Objet

    public
    function __construct($parametre)
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

    /**
     * @param $produits
     * @return void
     */
    public function genererAffichageListe($produits)
    {
        $this->chargementPrincipal();

        $this->tpl->assign('titrePage', 'Liste des Produits');

        $this->tpl->assign('listeProduits', $produits);

        $this->tpl->display('mod_produit/vue/produitListeVue.tpl');
    }



    public function genererAffichageListeTousLesProduits($tousLesProduits)
    {
        $this->chargementPrincipal();

        $this->tpl->assign('titrePage', 'Liste des Produits');

        $this->tpl->assign('listeProduits', $tousLesProduits);

        $this->tpl->display('mod_produit/vue/produitListeCommanderVue.tpl');    }

    public function genererAffichageFiche($produit)
    {
        $this->chargementPrincipal();
        switch ($this->parametre['action']) {
            case 'form_consulter':
                $this->tpl->assign('action', 'consulter');

                $this->tpl->assign('titrePage', 'Fiche produit : Consultation');

                $this->tpl->assign('unProduit', $produit);

                $this->tpl->assign('readonly', 'disabled');

                break;


            case 'form_ajouter':
            case 'ajouter':

                $this->tpl->assign('action', 'ajouter');

                $this->tpl->assign('titrePage', 'Fiche produit : Création');

                $this->tpl->assign('unProduit', $produit);

                $this->tpl->assign('readonly', '');

                break;


            case 'form_modifier':
            case 'modifier':

                $this->tpl->assign('action', 'modifier');

                $this->tpl->assign('titrePage', 'Fiche produit : Modification');

                $this->tpl->assign('unProduit', $produit);

                $this->tpl->assign('readonly', '');

                break;

            case 'form_supprimer':
            case 'supprimer':

                $this->tpl->assign('action', 'supprimer');

                $this->tpl->assign('titrePage', 'Fiche produit : Suppression');

                $this->tpl->assign('unProduit', $produit);

                $this->tpl->assign('readonly', 'disabled');

                break;

        }

        $this->tpl->display('mod_produit/vue/produitFicheVue.tpl');
    }
}
