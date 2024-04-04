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

    public function addProduit(ProduitTable $unProduit)
    {

        $sql = 'INSERT INTO produit(designation, quantite, descriptif, prixUnitaireHT, stock, poidsPiece) VALUES (?,?,?,?,?,?)';
        $idRequete = $this->executeRequete($sql, [
            $unProduit->getDesignation(),
            $unProduit->getQuantite(),
            $unProduit->getDescriptif(),
            $unProduit->getPrixUnitaireHT(),
            $unProduit->getStock(),
            $unProduit->getPoidsPiece(),
        ]);
        if ($idRequete) {
            ProduitTable::setMessageSucces("Ajout effectué avec succès.");
        }
    }


    public function editProduit(ProduitTable $unProduit)
    {

        $sql = 'UPDATE produit SET designation = ?, quantite = ?, descriptif = ?, prixUnitaireHT = ?, stock = ?, poidsPiece = ? WHERE reference = ?';
        $idRequete = $this->executeRequete($sql, [
            $unProduit->getDesignation(),
            $unProduit->getQuantite(),
            $unProduit->getDescriptif(),
            $unProduit->getPrixUnitaireHT(),
            $unProduit->getStock(),
            $unProduit->getPoidsPiece(),
            $unProduit->getReference(),
        ]);
        if ($idRequete) {
            ProduitTable::setMessageSucces("Modification effectuée avec succès.");
        }
    }

    public function deleteProduit()
    {

        $sql = 'DELETE FROM produit WHERE reference = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['reference'],
        ]);
        if ($idRequete) {
            ClientTable::setMessageSucces("Suppression effectuée avec succès.");
        }
    }


}