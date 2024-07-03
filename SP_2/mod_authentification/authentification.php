<?php
class Authentification
{

    private $parametre = []; // Un tableau associatif contenant le tableau $_REQUEST

    private $oController; // Objet instance du controller


    public function __construct($parametre)
    {
        // Initialisation de la propriété $parametre ($_REQUEST)
        $this->parametre = $parametre;

        // Création d'une instance (objet) de type AccueilController
        $this->oController = new AuthentificationController($this->parametre);

    }

    public function choixAction()
    {

        if (isset($this->parametre['action'])) {

            switch ($this->parametre['action']) {

                case 'authentifier':

                    $this->oController->authentifier();
                    break;

                case 'deconnecter' :

                    $this->oController->deconnecter();
                    break;

                case 'viderPanier':
                    $this->oController->viderPanier();
                    break;
            }

        }else{

            $this->oController->form_authentifier();
        }
    }
}
