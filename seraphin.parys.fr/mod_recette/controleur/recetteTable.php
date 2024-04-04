<?php

namespace mod_recette\controleur;
class RecetteTable
{
    private $codei;
    private $designation;
    private $produit;

    private $quantite;

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
    public function getCodei()
    {
        return $this->codei;
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
    public function getProduit()
    {
        return $this->produit;
    }

    public static function getMessageErreur(): string
    {
        return self::$messageErreur;
    }

    public static function getMessageSucces(): string
    {
        return self::$messageSucces;
    }

    public function getAutorisationBD(): bool
    {
        return $this->autorisationBD;
    }

    /**
     * @param mixed $codei
     */
    public function setCodei($codei): void
    {
        $this->codei = $codei;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation): void
    {
        $this->designation = $designation;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit($produit): void
    {
        $this->produit = $produit;
    }

    public static function setMessageErreur(string $messageErreur): void
    {
        self::$messageErreur = $messageErreur;
    }

    public static function setMessageSucces(string $messageSucces): void
    {
        self::$messageSucces = $messageSucces;
    }

    public function setAutorisationBD(bool $autorisationBD): void
    {
        $this->autorisationBD = $autorisationBD;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite): void
    {
        $this->quantite = $quantite;
    }





}