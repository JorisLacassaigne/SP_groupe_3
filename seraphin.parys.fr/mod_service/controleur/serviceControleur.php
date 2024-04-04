<?php

class ServiceControleur
{

    private $parametre = []; // $_REQUEST
    private $oVue; // Object
    private $oModele; // Object

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oModele = new ServiceModele($this->parametre);

        $this->oVue = new ServiceVue($this->parametre);
    }

    public function lister(){

        $services = $this->oModele->getListeServices();

        $this->oVue->genererAffichageListe($services);
    }

    public function form_consulter(){

        $services = $this->oModele->getUnService();

        $this->oVue->genererAffichageFiche($services);
    }

    public function form_ajouter(){

        $prepareService = new ServiceTable();


        $this->oVue->genererAffichageFiche($prepareService);

    }

    public function form_modifier(){

        $services = $this->oModele->getUnService();

        $this->oVue->genererAffichageFiche($services);

    }


    public function form_supprimer(){

        $services = $this->oModele->getUnService();

        $this->oVue->genererAffichageFiche($services);
    }

    public function ajouter(){

        $controleService = new ServiceTable($this->parametre);

        if($controleService->getAutorisationBD() == false){

            $this->oVue->genererAffichageFiche($controleService);

        }else{

            $this->oModele->addService($controleService);

            $this->lister();

        }
    }

    public function modifier(){

        $controleService = new ServiceTable($this->parametre);

        if($controleService->getAutorisationBD() == false){

            $this->oVue->genererAffichageFiche($controleService);

        }else{

            $this->oModele->editService($controleService);

            $this->oModele->editEtat($controleService);

            $this->lister();

        }

    }



    public function supprimer(){

//        $controleSuppression = $this->oModele->suppressionPossible();
//
//        if( $controleSuppression == false){
//
//            ServiceTable::setMessageErreur('Ce client possède déjà une commande. La suppression est impossible.');
//
//            $this->oVue->genererAffichageFiche($this->oModele->getUnService());
//
//        }else{

            $this->oModele->deleteService();

            $this->lister();
        }


//    }
}
