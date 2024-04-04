<?php

namespace mod_recette\modele;

use mod_recette\controleur\RecetteTable;
use Modele;

class RecetteModele extends Modele
{
    private $parametre = []; // $_REQUEST

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }

    public function getListeRecette()
    {
        $sql = 'SELECT * FROM ingredient WHERE produit = ?';
        $idRequete = $this->executeRequete($sql, [
            $this->parametre['produit'],
        ]);

        while ($uneRecette = $idRequete->fetch(PDO::FETCH_ASSOC)) {

            $listeRecette[] = new RecetteTable($uneRecette);
        }

        return $listeRecette;
    }


}