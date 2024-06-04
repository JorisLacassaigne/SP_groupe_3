<?php

class SalonVue
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
     * @param $salon
     * @return void
     */
    public function genererAffichageListe($salon){

        $this->chargementPrincipal();

        $this->tpl->assign('titrePage', 'Liste des Salon');

        $this->tpl->assign('listeSalon', $salon);

        $this->tpl->display('mod_salon/vue/salonListeVue.tpl');


    }


    public function genererAffichageFiche($salon){

        $this->chargementPrincipal();

        switch($this->parametre['action']){

            case 'form_consulter' :

                $this->tpl->assign('action', 'consulter');

                $this->tpl->assign('titrePage', 'Fiche Salon : Consultation');

                $this->tpl->assign('unSalon', $salon);

                $this->tpl->assign('readonly', 'disabled');

                break;


            case 'form_ajouter' :
            case 'ajouter' :

                $this->tpl->assign('action', 'ajouter');

                $this->tpl->assign('titrePage', 'Fiche salon : Création');

                $this->tpl->assign('unSalon', $salon);

                $this->tpl->assign('readonly', '');

                break;


            case 'form_modifier':
            case 'modifier':

                $this->tpl->assign('action', 'modifier');

                $this->tpl->assign('titrePage', 'Fiche Salon : Modification');

                $this->tpl->assign('unSalon', $salon);

                $this->tpl->assign('readonly', '');
                break;


            case 'form_supprimer' :
            case 'supprimer' :

                $this->tpl->assign('action', 'supprimer');

                $this->tpl->assign('titrePage', 'Fiche Salon : Suppression');

                $this->tpl->assign('unSalon', $salon);

                $this->tpl->assign('readonly', 'disabled');

                break;
        }


        $this->tpl->display('mod_salon/vue/salonFicheVue.tpl');

    }

}
