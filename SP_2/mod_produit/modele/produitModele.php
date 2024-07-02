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


    public function ajouterPanier($reference, $quantitePanier, $prixVente)
    {
        // Vérifier que la référence du produit n'est pas nulle
        if ($reference !== null) {
            // Récupérer les données du produit à partir de la base de données
            $produit = $this->getProduitParReference($reference);

            // Vérifier que la quantité et le prix de vente ne sont pas nulles
            if ($quantitePanier !== null && $prixVente !== null) {
                // Calculer la nouvelle somme totale du panier
                $sommeTotalPanier = isset($_SESSION['sommeTotalPanier']) ? $_SESSION['sommeTotalPanier'] : 0;
                $sommeTotalPanier += $quantitePanier * $prixVente;

                // Ajouter le produit au panier
                if (isset($_SESSION['panier'][$reference])) {
                    // Mettre à jour la quantité et le prix de vente
                    $_SESSION['panier'][$reference]['quantitePanier'] = $quantitePanier;
                    $_SESSION['panier'][$reference]['prixVente'] = $prixVente;
                } else {
                    // Ajouter le produit au panier
                    $_SESSION['panier'][$reference] = array(
                        'reference' => $reference,
                        'designation' => $produit->getDesignation(),
                        'prix' => $produit->getPrixUnitaireHT(),
                        'quantitePanier' => $quantitePanier,
                        'prixVente' => $prixVente,
                    );
                }

                // Mettre à jour la somme totale du panier dans la session
                $_SESSION['sommeTotalPanier'] = $sommeTotalPanier;
            }
        }
    }

}