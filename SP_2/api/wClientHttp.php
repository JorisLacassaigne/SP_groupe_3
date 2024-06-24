<?php

try {

    // Interface de connexion avec Windev
    if (isset($_GET['wDemande']) && $_GET['wDemande'] == 'azerty2QWERTY') {

        // Définir les infos de cnx
        define('SERVEUR', 'localhost');
        define('BASE', 'seraphinparysfilrouge_2');
        define('NOM', 'root');
        define('PASSE', '');

        $cnx = new PDO('mysql:host=' . SERVEUR . ';dbname=' . BASE, NOM, PASSE, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $sql = "SELECT * FROM client";

        $idRequete = $cnx->query($sql);

        if (!$idRequete) {
            echo "Erreur : récupération de données impossible";
        }

        while ($row = $idRequete->fetch(PDO::FETCH_ASSOC)) {
            echo $row['codec'] . " ; " . $row['nom'] . " ; " . $row['cp'] . " ; " . $row['ville'] . " sep ";
        }

    } else {

        echo "Accès INTERDIT";

    }

} catch(PDOException $e) {
        echo "Echec de connexion : " . $e->getMessage();
        exit;
}



