<?php

class ProduitModele extends Modele
{
    private $parametre = []; // $_REQUEST

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }

    public function getProduitParReference()
    {
        $sql = 'SELECT * FROM produit WHERE reference = ?';
        $idRequete = $this->executeRequete($sql, [
            $this->parametre['reference'],
        ]);

        $leProduit = new ProduitTable($idRequete->fetch(PDO::FETCH_ASSOC));

        return $leProduit;
    }

    public function getDesignationParReference($reference)
    {
        $sql = 'SELECT designation FROM produit WHERE reference = ?';
        $idRequete = $this->executeRequete($sql, [$reference]);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        return $row['designation'];
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


    public function ajouter_panier($reference, $quantite, $prix_vente)
    {
        // Récupérer les données du produit à partir de la base de données
        $produit = $this->getProduitParReference($reference);

        // Ajouter le produit au panier
        if (isset($_SESSION['panier'][$reference])) {
            if (!isset($_SESSION['panier'][$reference]['quantite'])) {
                $_SESSION['panier'][$reference]['quantite'] = 0;
            }
            $_SESSION['panier'][$reference]['quantite'] += $quantite;
            $_SESSION['panier'][$reference]['prix_vente'] = $prix_vente;
        } else {
            $_SESSION['panier'][$reference] = array(
                'reference' => $reference,
                'designation' => $produit->getDesignation(),
                'prix' => $produit->getPrixUnitaireHT(),
                'quantite' => $quantite,
                'prix_vente' => $prix_vente
            );
            var_dump($reference);
            var_dump($quantite);
        }
    }
}