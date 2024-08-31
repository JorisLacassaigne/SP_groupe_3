<?php

try {
    if (isset($_GET['wDemande']) && $_GET['wDemande'] == 'getProduits') {
        define('SERVEUR', 'localhost');
        define('BASE', 'seraphinparysfilrouge_2');
        define('NOM', 'root');
        define('PASSE', '');


        $cnx = new PDO('mysql:host=' . SERVEUR . ';dbname=' . BASE, NOM, PASSE, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $sql = "SELECT * FROM produit where quantite <= 50";

        $idRequete = $cnx->query($sql);

        if (!$idRequete) {
            echo "Erreur : recuperation de données impossible";
        }

        while ($row = $idRequete->fetch(PDO::FETCH_ASSOC)) {
            echo $row['reference'] . ";" . $row['designation'] . ";" . $row['quantite'] . ";" . $row['descriptif'] . ";" . $row["prixUnitaireHT"] . ";" . $row["stock"] . ";" . $row["poidsPiece"] . " sep ";
        }
    } else {
        echo "ACCES INTERDIT (texte vu par Lilian)";
    }
} catch (PDOException $e) {
    echo "Echec de connexion : " . $e->getMessage();
    exit();
}
?>