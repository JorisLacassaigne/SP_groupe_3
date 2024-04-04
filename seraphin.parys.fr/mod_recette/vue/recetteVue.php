<?php

namespace mod_recette\vue;
use Smarty;class RecetteVue
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

        $this->tpl->assign('login', $_SESSION['prenomnom']);
    }

    /**
     * @param $recette
     * @return void
     */

    public function genererAffichageFiche($recette)
    {
        $this->chargementPrincipal();
        switch ($this->parametre['action']) {
            case 'form_recette':
            case 'recette':

                $this->tpl->assign('action', 'recette');

                $this->tpl->assign('titrePage', 'Fiche recette :');

                $this->tpl->assign('uneRecette', $recette);

                $this->tpl->assign('readonly', '');

                break;

        }

        $this->tpl->display('mod_recette/vue/recetteVue.tpl');
    }
}