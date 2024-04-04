<?php

class ServiceVue
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
     * @param $services
     * @return void
     */
    public function genererAffichageListe($services){

        $this->chargementPrincipal();

        $this->tpl->assign('titrePage', 'Liste des Services');

        $this->tpl->assign('listeServices', $services);

        $this->tpl->display('mod_service/vue/serviceListeVue.tpl');


    }


    public function genererAffichageFiche($services){

        $this->chargementPrincipal();

        switch($this->parametre['action']){

            case 'form_consulter' :

                $this->tpl->assign('action', 'consulter');

                $this->tpl->assign('titrePage', 'Fiche Services : Consultation');

                $this->tpl->assign('unService', $services);

                $this->tpl->assign('readonly', 'disabled');

                break;


            case 'form_ajouter' :
            case 'ajouter' :

                $this->tpl->assign('action', 'ajouter');

                $this->tpl->assign('titrePage', 'Fiche Service : Création');

                $this->tpl->assign('unService', $services);

                $this->tpl->assign('readonly', '');

                break;


            case 'form_modifier':
            case 'modifier':

                $this->tpl->assign('action', 'modifier');

                $this->tpl->assign('titrePage', 'Fiche Service : Modification');

                $this->tpl->assign('unService', $services);

                $this->tpl->assign('readonly', '');
                break;


            case 'form_supprimer' :
            case 'supprimer' :

                $this->tpl->assign('action', 'supprimer');

                $this->tpl->assign('titrePage', 'Fiche Service : Suppression');

                $this->tpl->assign('unService', $services);

                $this->tpl->assign('readonly', 'disabled');

                break;
        }


        $this->tpl->display('mod_service/vue/serviceFicheVue.tpl');

    }

}
