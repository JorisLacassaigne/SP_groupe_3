<?php

class AuthentificationModele extends modele{

    private $parametre = []; //$_REQUEST

    public function __construct($parametre){

        $this->parametre = $parametre;
    }


    public function rechercheVendeur(AuthentificationTable $authEnCours){

        $sql = 'SELECT * FROM vendeur WHERE login = ?';

        $idRequete = $this->executeRequete($sql, [
            $authEnCours->getLogin(),
        ]);

        $authExistant = $idRequete->fetch(PDO::FETCH_ASSOC);

        if($idRequete->rowCount() == 1 && $authEnCours->getLogin() == $authExistant['login'] &&
            $authEnCours->getMotdepasse() == $authExistant['motdepasse']){

            $_SESSION['login'] = $authEnCours->getLogin();
            $_SESSION['prenomNom'] = $authExistant['prenom'] . " " . $authExistant['nom'];
            $_SESSION['codev']= $authExistant['codev'];
            $_SESSION['panier']= [];
            $_SESSION['sommeTotalPanier']= 0;
            return true;

        }

        AuthentificationTable::setMessageErreur("Authentification invalide.");
        return false;
    }

}
