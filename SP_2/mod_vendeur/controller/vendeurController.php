<?php
class VendeurController{

    private $parametre = []; // $_REQUEST
    private $oVue; // Object
    private $oModele; // Object

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oModele = new VendeurModele($this->parametre);

        $this->oVue = new VendeurVue($this->parametre);
    }

    public function lister(){

        $vendeurs = $this->oModele->getListeVendeurs();

        $this->oVue->genererAffichageListe($vendeurs);
    }

    public function formConsulter(){

        $vendeur = $this->oModele->getUnVendeur();
        $this->oModele->stat01($vendeur);

        $this->oVue->genererAffichageFiche($vendeur);
    }

    public function form_ajouter(){

        $prepareVendeur = new VendeurTable();


        $this->oVue->genererAffichageFiche($prepareVendeur);

    }

    public function form_modifier(){

        $vendeur = $this->oModele->getUnVendeur();
        $this->oModele->stat01($vendeur);

        $this->oVue->genererAffichageFiche($vendeur);

    }

    public function form_supprimer(){

        $vendeur = $this->oModele->getUnVendeur();
        $this->oModele->stat01($vendeur);

        $this->oVue->genererAffichageFiche($vendeur);
    }

    public function ajouter(){
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

        $controleVendeur = new VendeurTable($this->parametre);

//        var_dump($controleClient);
        if($controleVendeur->getAutorisationBD() == false){

            $this->oVue->genererAffichageFiche($controleVendeur);

        }else{

            $this->oModele->addVendeur($controleVendeur);

            $this->lister();

        }



    }

    public function modifier(){
        //Même algo que pour ajouter

        $controleClient = new ClientTable($this->parametre);

//        var_dump($controleClient);
        if($controleClient->getAutorisationBD() == false){

            $this->oVue->genererAffichageFiche($controleClient);

        }else{

            $this->oModele->editClient($controleClient);

            $this->lister();

        }


    }



    public function supprimer(){
        // Un client possédant une commande ne peut pas être supprimé
        // Quel Algo ?
        // Si le codec du client est trouvé dans la table commande ALORS
        // Suppression imposible + message associé
        // SINON
        // DELETE
        // Puis retour à la liste avec message associé
        $controleSuppression = $this->oModele->suppressionPossible();

        if( $controleSuppression == false){

            ClientTable::setMessageErreur('Ce client possède déjà une commande. La suppression est impossible.');

            $this->oVue->genererAffichageFiche($this->oModele->getUnClient());

        }else{

            $this->oModele->deleteClient();

            $this->lister();
        }


    }
}
