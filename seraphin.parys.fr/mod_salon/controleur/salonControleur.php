<?php

class Saloncontroleur{

private $parametre = []; // $_REQUEST
private $oVue; // Object
private $oModele; // Object

public function __construct($parametre){

    $this->parametre = $parametre;

    $this->oModele = new SalonModele($this->parametre);

    $this->oVue = new SalonVue($this->parametre);
}

public function lister(){

    $salons = $this->oModele->getListeSalon();

    $this->oVue->genererAffichageListe($salons);
}

public function form_consulter(){

    $salon = $this->oModele->getUnSalon();
//    $this->oModele->stat01($salon);

    $this->oVue->genererAffichageFiche($salon);
}

public function form_ajouter(){

    $prepareSalon = new SalonTable();


    $this->oVue->genererAffichageFiche($prepareSalon);

}

    public function form_modifier()
    {

        $salon = $this->oModele->getUnSalon();
//        $this->oModele->stat01($client);

        $this->oVue->genererAffichageFiche($salon);
    }


public function form_supprimer(){

    $salon = $this->oModele->getUnSalon();
//    $this->oModele->stat01($salon);

    $this->oVue->genererAffichageFiche($salon);
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

    $controleSalon = new SalonTable($this->parametre);

//        var_dump($controleClient);
    if($controleSalon->getAutorisationBD() == false){

        $this->oVue->genererAffichageFiche($controleSalon);

    }else{

        $this->oModele->addSalon($controleSalon);

        $this->lister();

    }



}

public function modifier()
{
    //Même algo que pour ajouter

    $controleSalon = new SalonTable($this->parametre);

//        var_dump($controleClient);
    if ($controleSalon->getAutorisationBD() == false) {

        $this->oVue->genererAffichageFiche($controleSalon);

    } else {

        $this->oModele->editSalon($controleSalon);

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

        SalonTable::setMessageErreur(' La suppression est impossible.');

        $this->oVue->genererAffichageFiche($this->oModele->getUnSalon());

    }else{

        $this->oModele->deleteSalon();

        $this->lister();
    }


}
}
