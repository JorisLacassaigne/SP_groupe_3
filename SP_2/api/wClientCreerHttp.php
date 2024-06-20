<?php
try {

    // Interface de connexion avec Windev
    if (isset($_GET['windev']) && $_POST['windev'] == 'ajout') {

        // Définir les infos de cnx
        define('SERVEUR', 'localhost');
        define('BASE', 'jlacassaigne_seraphinparysbase');
        define('NOM', 'jorislacassaigne');
        define('PASSE', 'Talwegfomec82.');

        $cnx = new PDO('mysql:host=' . SERVEUR . ';dbname=' . BASE, NOM, PASSE, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $telephone = $_POST['telephone'];

        $sql = 'INSERT INTO client (nom, adresse, cp, ville, telephone) VALUES (?,?,?,?,?)';

        $idRequete = $cnx->prepare($sql);
        $idRequete->execute([
            $nom,
            $adresse,
            $cp,
            $ville,
            $telephone,
        ]);

        if ($idRequete){
            echo 1;
        } else {
            echo "Mémorisation des données impossible";
        }
    } else {
        echo "Accès INTERDIT";
    }

}catch(PDOException $e) {
    echo "Echec de connexion : " . $e->getMessage();
    exit;
}