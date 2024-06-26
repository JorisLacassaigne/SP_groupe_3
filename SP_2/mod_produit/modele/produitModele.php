<?php

class ProduitModele extends Modele
{
    private $parametre = []; // $_REQUEST

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }

    public function getListeProduit()
    {

        $sql = 'SELECT * FROM produit';

        $idRequete = $this->executeRequete($sql);

        if ($idRequete->rowCount() > 0) {
            // Création du tableau d'objets
            while ($unProduit = $idRequete->fetch(PDO::FETCH_ASSOC)) {
                $listeProduits[] = new ProduitTable($unProduit);
            }
            return $listeProduits;

        } else {

            return null;
        }
    }

    public function getUnProduit()
    {
        $sql = 'SELECT * FROM produit WHERE reference = ?';
        $idRequete = $this->executeRequete($sql, [
            $this->parametre['reference'],
        ]);

        $leProduit = new ProduitTable($idRequete->fetch(PDO::FETCH_ASSOC));

        return $leProduit;
    }


    /*public function addPanier(ProduitTable $reference, $quantite)
    {
        $sql = 'SELECT * FROM produit where reference = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['reference'],
        ]);

        if ($idRequete->rowCount() > 0) {
            // Création du tableau d'objets
            while ($unProduit = $idRequete->fetch(PDO::FETCH_ASSOC)) {
                array_push($_SESSION['panier'], $unProduit, $quantite);
                $listeProduits[] = new ProduitTable($unProduit);
            }
            var_dump($listeProduits);
            return $listeProduits;

        } else {

            return null;
        }

    }*/

    public function addPanier(ProduitTable $produitTable, $quantite)
    {
        // Récupération de la référence du produit à partir de l'objet ProduitTable
        $reference = $produitTable->getReference();

        // Requête SQL pour récupérer le produit par sa référence
        $sql = 'SELECT * FROM produit WHERE reference = ?';
        $idRequete = $this->executeRequete($sql, [$reference]);
        $reference = $produitTable->getReference();
        $quantite = $produitTable->getQuantite();
        // Vérification si le produit existe dans la base de données
        if ($idRequete->rowCount() > 0) {
            // Ajout du produit au panier dans $_SESSION['panier']
            // Note : Vous devez adapter cette partie en fonction de la structure attendue dans $_SESSION['panier']

            // Exemple : Supposons que $_SESSION['panier'] est un tableau d'objets ProduitTable
            // Vous pouvez ajouter directement l'objet $produitTable au panier avec sa quantité
            $produitTable->setQuantite($quantite);
            $_SESSION['panier'][] = $produitTable;

            // Vous pouvez également retourner un tableau de ProduitTable si nécessaire
            $listeProduits = [];
            while ($unProduit = $idRequete->fetch(PDO::FETCH_ASSOC)) {
                $listeProduits[] = new ProduitTable($unProduit);
            }
            return $listeProduits;
        } else {
            // Retourner null si le produit n'a pas été trouvé
            return null;
        }
    }

}