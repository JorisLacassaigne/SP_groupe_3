<?php

class ProduitController
{

    private $parametre = []; // $_REQUEST
    private $oVue; // objet
    private $oModele; // objet

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

        $this->oModele = new ProduitModele($this->parametre);

        $this->oVue = new ProduitVue($this->parametre);
    }


    public function lister()
    {

        $produits = $this->oModele->getListeProduit();

        $this->oVue->genererAffichageListe($produits);
    }

    public function listerProduits()
    {
        $tousLesProduits = $this->oModele->getListeProduit();

        $this->oVue->genererAffichageListeTousLesProduits($tousLesProduits);
    }

    public function formConsulter()
    {
        $produit = $this->oModele->getUnProduit();

        $this->oVue->genererAffichageFiche($produit);
    }

    public function ajouterPanier($reference, $quantitePanier, $prixVente, $sommeTotalPanier)
    {
        // Vérifier que $quantitePanier et $prixVente ne sont pas nulles avant de les ajouter à la session
        if ($quantitePanier !== null && $prixVente !== null) {
//            var_dump($quantitePanier);
//            var_dump($prixVente);
            $this->oModele->ajouterPanier($reference, $quantitePanier, $prixVente, $sommeTotalPanier);

            // Ajouter les valeurs de $quantitePanier et $prixVente à la session
            $_SESSION['panier'][$reference]['quantitePanier'] = $quantitePanier;
            $_SESSION['panier'][$reference]['prixVente'] = $prixVente;
            $_SESSION['$sommeTotalPanier'] = $sommeTotalPanier;
        }

//        echo '<pre>';
//        print_r($_SESSION);
//        echo '</pre>';
//        exit;

        header('Location: index.php?gestion=produit&action=listerProduits');
    }


}