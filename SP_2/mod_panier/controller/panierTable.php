<?php
class PanierTable{
    private $ligne;
    private $reference;
    private $designation;
    private $quantite;
    private $prixHT;
    private $prixVente;
    private $total;

    private $stat01;
    private $stat02;
    private $stat03;

    private $codev;
    private $nom;
    private $prenom;

    private $npc;
    private $npctab;


    private $autorisationBD = true;
    private static $messageErreur = "";
    private static $messageSucces = "";

    /**
     * @return mixed
     */
    public function getLigne()
    {
        return $this->ligne;
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
    public function getPrixHT()
    {
        return $this->prixHT;
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
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $ligne
     */
    public function setLigne($ligne): void
    {
        $this->ligne = $ligne;
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
        $this->designation = $designation;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite): void
    {
        $this->quantite = $quantite;
    }

    /**
     * @param mixed $prixHT
     */
    public function setPrixHT($prixHT): void
    {
        $this->prixHT = $prixHT;
    }

    /**
     * @param mixed $prixVente
     */
    public function setPrixVente($prixVente): void
    {
        $this->prixVente = $prixVente;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total): void
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getStat01()
    {
        return $this->stat01;
    }

    /**
     * @return mixed
     */
    public function getStat02()
    {
        return $this->stat02;
    }

    /**
     * @return mixed
     */
    public function getStat03()
    {
        return $this->stat03;
    }

    /**
     * @param mixed $stat01
     */
    public function setStat01($stat01): void
    {
        $this->stat01 = $stat01;
    }

    /**
     * @param mixed $stat02
     */
    public function setStat02($stat02): void
    {
        $this->stat02 = $stat02;
    }

    /**
     * @param mixed $stat03
     */
    public function setStat03($stat03): void
    {
        $this->stat03 = $stat03;
    }

    /**
     * @return mixed
     */
    public function getCodev()
    {
        return $this->codev;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $codev
     */
    public function setCodev($codev): void
    {
        $this->codev = $codev;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getNpc()
    {
        return $this->npc;
    }

    /**
     * @param mixed $npc
     */
    public function setNpc($npc): void
    {
        $this->npc = $npc;
    }

    /**
     * @return mixed
     */
    public function getNpctab()
    {
        return $this->npctab;
    }

    /**
     * @param mixed $npctab
     */
    public function setNpctab($npctab): void
    {
        $this->npctab = $npctab;
    }











    public function getAutorisationBD(): bool
    {
        return $this->autorisationBD;
    }

    public static function getMessageErreur(): string
    {
        return self::$messageErreur;
    }

    public static function getMessageSucces(): string
    {
        return self::$messageSucces;
    }

    public function setAutorisationBD(bool $autorisationBD): void
    {
        $this->autorisationBD = $autorisationBD;
    }

    public static function setMessageErreur(string $messageErreur): void
    {
        self::$messageErreur = self::$messageErreur . $messageErreur . "<br>";
    }

    public static function setMessageSucces(string $messageSucces): void
    {
        self::$messageSucces = $messageSucces;
    }



}