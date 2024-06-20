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


    public function addPanier()
    {
        $sql = 'SELECT * FROM produit where reference = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['reference'],
        ]);

        if ($idRequete->rowCount() > 0) {
            // Création du tableau d'objets
            while ($unProduit = $idRequete->fetch(PDO::FETCH_ASSOC)) {
                array_push($_SESSION['panier'], $unProduit);
                $listeProduits[] = new ProduitTable($unProduit);
            }
            return $listeProduits;

        } else {

            return null;
        }

    }
}