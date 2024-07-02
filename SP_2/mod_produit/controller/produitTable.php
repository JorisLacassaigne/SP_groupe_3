<?php

class ProduitTable
{
    private $reference;
    private $designation;
    private $quantite;
    private $descriptif;
    private $prixUnitaireHT;
    private $stock;
    private $poidsPiece;

    private $prixVente;
    private $quantitePanier;

    private static $messageErreur = "";
    private static $messageSucces = "";
    private $autorisationBD = true;

    public function hydrater(array $data)
    {
        foreach ($data as $key => $valeur) {
            // Concaténer la lef pour rechercher le setter à appeler
            $setter = 'set' . ucfirst($key);
            if (method_exists($this, $setter)) {
                //Invoquer la méthode
                $this->$setter($valeur);
            }
        }
    }


    public function __construct($data = null)
    {
        if ($data != null) {

            $this->hydrater($data);
        }
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @return mixed
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * @return mixed
     */
    public function getPrixUnitaireHT()
    {
        return $this->prixUnitaireHT;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    public function getPoidsPiece()
    {
        return $this->poidsPiece;
    }

    /**
     * @return mixed
     */
    public function getPrixVente()
    {
        return $this->prixVente;
    }

    /**
     * @return mixed
     */
    public function getQuantitePanier()
    {
        return $this->quantitePanier;
    }



    public static function getMessageErreur(): string
    {
        return self::$messageErreur;
    }

    public static function getMessageSucces(): string
    {
        return self::$messageSucces;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation): void
    {
        if (empty($designation) || ctype_space($designation)) {
            self::setMessageErreur("Le nom du produit est obligatoire");
            $this->setAutorisationBD(false);
        }
        $this->designation = $designation;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite): void{
            $this->quantite = $quantite;
    }

    /**
     * @param mixed $descriptif
     */
    public function setDescriptif($descriptif): void
    {
        $this->descriptif = $descriptif;
    }

    /**
     * @param mixed $prixUnitaireHT
     */
    public function setPrixUnitaireHT($prixUnitaireHT): void
    {
        $this->prixUnitaireHT = $prixUnitaireHT;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock): void
    {
        $this->stock = $stock;
    }

    public function setPoidsPiece($poidsPiece): void
    {
        $this->poidsPiece = $poidsPiece;
    }

    /**
     * @param mixed $prixVente
     */
    public function setPrixVente($prixVente): void
    {
        $this->prixVente = $prixVente;
    }

    /**
     * @param mixed $quantitePanier
     */
    public function setQuantitePanier($quantitePanier): void
    {
        $this->quantitePanier = $quantitePanier;
    }


    public static function setMessageErreur(string $messageErreur): void
    {
        self::$messageErreur = self::$messageErreur . $messageErreur . "<br>";
    }

    public static function setMessageSucces(string $messageSucces): void
    {
        self::$messageSucces = $messageSucces;
    }

    public function getAutorisationBD(): bool
    {
        return $this->autorisationBD;
    }

    public function setAutorisationBD(bool $autorisationBD): void
    {
        $this->autorisationBD = $autorisationBD;
    }


}