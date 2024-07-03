<?php
class AuthentificationController {

    private $parametre = []; // $_REQUEST
    private $oVue; // Object
    private $oModele; // Object

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oModele = new AuthentificationModele($this->parametre);

        $this->oVue = new AuthentificationVue($this->parametre);
    }

    public function form_authentifier(){

        $prepareAuthentification = new AuthentificationTable();

        $this->oVue->genererAffichage($prepareAuthentification);

    }

    public function authentifier(){

        $controleAuthentification = new AuthentificationTable($this->parametre);

        if($controleAuthentification->getAutorisationSession() == false ||
            $this->oModele->rechercheVendeur($controleAuthentification) == false){

            $this->oVue->genererAffichage($controleAuthentification);

        }else{

            header('Location:index.php');
        }

    }

    public function deconnecter(){

        session_destroy();
        $_SESSION = [];
        header('Location:index.php');
    }
    public function viderPanier(){

        $_SESSION['panier']= [];
        $_SESSION['sommeTotalPanier']= 0;
        $_SESSION['sommeTotalProduit']= 0;
        header('Location:index.php');
    }
}
