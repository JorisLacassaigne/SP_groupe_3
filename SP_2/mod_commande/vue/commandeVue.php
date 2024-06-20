<?php


class CommandeVue

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

        $this->tpl->assign('login', $_SESSION['prenomNom']);

    }

    /**
     * @param $commandes
     * @return void
     */
    public function genererAffichageListe($commandes)
    {

        $this->chargementPrincipal();

        $this->tpl->assign('titrePage', 'Liste des Commandes');

        $this->tpl->assign('listeCommandes', $commandes);

        $this->tpl->display('mod_commande/vue/commandeListeVue.tpl');


    }

    public function genererAffichageListeProduits($produits)
    {
        $this->chargementPrincipal();

        $this->tpl->assign('titrePage', 'Liste des Produits');

        $this->tpl->assign('listeProduits', $produits);

        $this->tpl->display('mod_commande/vue/commandeFicheNouvelleVue.tpl');
    }


    public function genererAffichageFiche($uneCommande)
    {

        $this->chargementPrincipal();

        switch ($this->parametre['action']) {

            case 'form_consulter' :

                $this->tpl->assign('action', 'consulter');

                $this->tpl->assign('titrePage', 'Fiche Commande : Consultation');

                $this->tpl->assign('uneCommande', $uneCommande);

                $this->tpl->assign('readonly', 'disabled');

                break;


            case 'form_ajouter' :
            case 'ajouter' :

                $this->tpl->assign('action', 'ajouter');

                $this->tpl->assign('titrePage', 'Fiche Commande : Nouvelle');

                $this->tpl->assign('listeProduits', $uneCommande);

                $this->tpl->assign('readonly', '');

                break;


            case 'form_modifier':
            case 'modifier':

                $this->tpl->assign('action', 'modifier');

                $this->tpl->assign('titrePage', 'Fiche Commande : Modification');

                $this->tpl->assign('uneCommande', $uneCommande);

                $this->tpl->assign('readonly', '');
                break;


            case 'form_supprimer' :
            case 'supprimer' :

                $this->tpl->assign('action', 'supprimer');

                $this->tpl->assign('titrePage', 'Fiche Commande : Suppression');

                $this->tpl->assign('uneCommande', $uneCommande);

                $this->tpl->assign('readonly', 'disabled');

                break;
        }


        $this->tpl->display('mod_commande/vue/commandeFicheVue.tpl');

    }
}