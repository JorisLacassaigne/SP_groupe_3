<?php
try {

    // Interface de connexion avec Windev p
    if (isset($_GET['wDemande']) && $_GET['wDemande'] == 'azerty2QWERTY' ){

        // Définir les infos de cnx

        define('SERVEUR', 'localhost');
        define('BASE', 'seraphinparys');
        define('NOM', 'root');
        define('PASSE', '');

        $cnx = new PDO('mysql:host=' . SERVEUR . ';dbname=' . BASE, NOM, PASSE, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $id = $_GET['reference'];

        $sql = "Delete from produit where id=$id";

        $idRequete = $cnx->query($sql);

        if (!$idRequete){
            echo "Erreur : recupération de données impossible";
        }

    }else{
        echo "ACCES INTERDIT";
    }


}catch (PDOException $e ){

    echo "Echec de connexion : " . $e->getMessage();
    exit;

}