<?php


class CommandeControleur
{



    private $parametre = []; // $_REQUEST
    private $oVue; // Object
    private $oModele; // Object

    public function __construct($parametre)
    {
        $this->parametre = $parametre;

        $this->oModele = new CommandeModele($this->parametre);

        $this->oVue = new CommandeVue($this->parametre);
    }

    public function lister()
    {

        $commandes = $this->oModele->getListeCommandes();

        $this->oVue->genererAffichageListe($commandes);
    }

    public function form_consulter()
    {

        $commandes = $this->oModele->getUneCommande();
        $this->oModele->stat01($commandes);

        $this->oVue->genererAffichageFiche($commandes);
    }

    public function form_ajouter()
    {

        $prepareCommande = new CommandeTable();


        $this->oVue->genererAffichageFiche($prepareCommande);

    }

    public function form_modifier()
    {

        $commandes = $this->oModele->getUneCommande();
        $this->oModele->stat01($commandes);

        $this->oVue->genererAffichageFiche($commandes);

    }

    public function form_supprimer()
    {

        $commandes = $this->oModele->getUneCommande();
        $this->oModele->stat01($commandes);

        $this->oVue->genererAffichageFiche($commandes);
    }

    public function ajouter()
    {
        // Quel Algo ?
        // Je controle les données envoyées
        // (en provenance du formulaire | Saisie Utilisateur)

        // SI problème survient ALORS
        // Retour au formulaire avec les données saisies
        // Ajout également d'un message d'erreur
        // ATTENTION : Aucune écriture en BD
        // SINON
        // Ecriture en BD
        // Retour à la liste des clients
        // Ajout également d'un message de type succès
        // FINSI

        $controleCommande = new CommandeTable($this->parametre);

//        var_dump($controleClient);
        if ($controleCommande->getAutorisationBD() == false) {

            $this->oVue->genererAffichageFiche($controleCommande);

        } else {

            $this->oModele->addCommande($controleCommande);

            $this->lister();

        }


    }

    public function modifier()
    {
        //Même algo que pour ajouter

        $controleCommande = new CommandeTable($this->parametre);

        if ($controleCommande->getAutorisationBD() == false) {

            $this->oVue->genererAffichageFiche($controleCommande);

        } else {

            $this->oModele->editCommande($controleCommande);

            $this->lister();

        }


    }


    public function supprimer()
    {
        // Un client possédant une commande ne peut pas être supprimé
        // Quel Algo ?
        // Si le codec du client est trouvé dans la table commande ALORS
        // Suppression imposible + message associé
        // SINON
        // DELETE
        // Puis retour à la liste avec message associé
        $controleSuppression = $this->oModele->suppressionPossible();

        if ($controleSuppression == false) {

            ClientTable::setMessageErreur('Ce client possède déjà une commande. La suppression est impossible.');

            $this->oVue->genererAffichageFiche($this->oModele->getUneCommande());

        } else {

            $this->oModele->deleteCommande();

            $this->lister();
        }


    }


}