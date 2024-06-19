<?php

class Autoloader
{

    public static function chargerClasse()
    {

        spl_autoload_register([__CLASS__, 'autoload']);

    }

    private static function autoload($maClasse)
    {
        // $maClasse contient le nom de la classe appelée :
        // Accueil, AccueilControleur, AccueilVue, ClientControleur; ClientModele, ...
        // Transformation avec le nom de la classe en minuscule (première lettre)
        $maClasse = lcfirst($maClasse);

        // Créer un tableau avec l'arborescence des modules contenant les classes
        // pouvant être appelées
        $repertoires = [
            'mod_accueil/',
            'mod_accueil/controller/',
            'mod_accueil/modele/',
            'mod_accueil/vue/',
            'mod_service/',
            'mod_service/controller/',
            'mod_service/modele/',
            'mod_service/vue/',
            'mod_authentification/',
            'mod_authentification/controller/',
            'mod_authentification/modele/',
            'mod_authentification/vue/',
            'mod_produit/',
            'mod_produit/controller/',
            'mod_produit/modele/',
            'mod_produit/vue/',
            'mod_recette/',
            'mod_recette/controller/',
            'mod_recette/modele/',
            'mod_recette/recettes_a_telecharger/',
            'mod_recette/vue/',
            'mod_salon/',
            'mod_salon/controller/',
            'mod_salon/modele/',
            'mod_salon/vue/',
            'mod_client/',
            'mod_client/controller/',
            'mod_client/modele/',
            'mod_client/vue/',
            'mod_commande/',
            'mod_commande/controller/',
            'mod_commande/modele/',
            'mod_commande/vue/',
            'mod_vendeur/',
            'mod_vendeur/controller/',
            'mod_vendeur/modele/',
            'mod_vendeur/vue/',
            'mod_profil/',
            'mod_profil/controller/',
            'mod_profil/modele/',
            'mod_profil/vue/',
        ];


        foreach ($repertoires as $repertoire) {
            // vérification si fichier attendu existe
            // accueil.php, accueilControleur.php, serviceControleur.php
            // serviceModele.php
            if (file_exists($repertoire . $maClasse . '.php')) {
                require_once($repertoire . $maClasse . '.php');
                return;
            }

        }
    }
}

