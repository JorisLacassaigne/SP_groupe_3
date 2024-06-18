<?php

class VendeurVue
{

    private $parametre = []; // $_REQUEST

    private $tpl; // Object

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->tpl = new Smarty();
    }


    public function chargementPrincipal(){

        $this->tpl->assign('titrePrincipal', "Séraphin PARYS");

        $this->tpl->assign('deconnexion', "Déconnexion");

        $this->tpl->assign('login', $_SESSION['prenomNom']);

    }

    /**
     * @param $vendeur
     * @return void
     */
    public function genererAffichageListe($vendeur){

        $this->chargementPrincipal();

        $this->tpl->assign('titrePage', 'Liste des Vendeurs');

        $this->tpl->assign('listeVendeurs', $vendeur);

        $this->tpl->display('mod_vendeur/vue/vendeurListeVue.tpl');


    }


    public function genererAffichageFiche($vendeur){

        $this->chargementPrincipal();

        switch($this->parametre['action']){

            case 'form_consulter' :

                $this->tpl->assign('action', 'consulter');

                $this->tpl->assign('titrePage', 'Fiche Vendeur : Consultation');

                $this->tpl->assign('unVendeur', $vendeur);

                $this->tpl->assign('readonly', 'disabled');

                break;


            case 'form_ajouter' :
            case 'ajouter' :

                $this->tpl->assign('action', 'ajouter');

                $this->tpl->assign('titrePage', 'Fiche Client : Création');

                $this->tpl->assign('unVendeur', $vendeur);

                $this->tpl->assign('readonly', '');

                break;


            case 'form_modifier':
            case 'modifier':

                $this->tpl->assign('action', 'modifier');

                $this->tpl->assign('titrePage', 'Fiche Client : Modification');

                $this->tpl->assign('unVendeur', $vendeur);

                $this->tpl->assign('readonly', '');
                break;


            case 'form_supprimer' :
            case 'supprimer' :

                $this->tpl->assign('action', 'supprimer');

                $this->tpl->assign('titrePage', 'Fiche Client : Suppression');

                $this->tpl->assign('unVendeur', $vendeur);

                $this->tpl->assign('readonly', 'disabled');

                break;
        }


        $this->tpl->display('mod_vendeur/vue/vendeurFicheVue.tpl');

    }

}
