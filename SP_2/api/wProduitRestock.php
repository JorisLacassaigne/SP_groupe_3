<?php
try {

    // Interface de connexion avec Windev p
    if ($_SERVER['REQUEST_METHOD'] === "POST"){

        // Définir les infos de cnx

        define('SERVEUR', 'localhost');
        define('BASE', 'seraphinparysfilrouge_2');
        define('NOM', 'jlacassaigne36');
        define('PASSE', 'Talwegfomec82.');

        $cnx = new PDO('mysql:host=' . SERVEUR . ';dbname=' . BASE, NOM, PASSE, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $sql = "UPDATE produit SET stock = ? WHERE reference = ?";
         $idRequete = $cnx->prepare($sql);
        $stock = $_POST['stock'];
        $id = $_POST['id'];

        $executed = $idRequete->execute([$stock,$id]);

        if (!$idRequete){
            echo "Erreur : recupération de données impossible";
        }

        while($row = $idRequete->fetch(PDO::FETCH_ASSOC)){

            echo $row['reference'] . " ; " . $row['designation'] . " ; " . $row['quantite'] . " ; " . $row['descriptif'] . " ; " . $row['prixUnitaireHT'] . " ; " . $row['stock'];
        }



    }else{
        echo "ACCES INTERDIT";
    }


}catch (PDOException $e ){

    echo "Echec de connexion : " . $e->getMessage();
    exit;

}
