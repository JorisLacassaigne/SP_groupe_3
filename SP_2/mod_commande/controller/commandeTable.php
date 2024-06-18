<?php

class CommandeTable{

    private $numero;
    private $codev;
    private $codec;
    private $dateLivraison;
    private $dateCommande;
    private $totalHT;
    private $totalTVA;
    private $etat;

    private $autorisationBD = true;

    private static $messageErreur = "";
    private static $messageSucces = "";
    private $stat01;

    /**
     * @param array $data
     * @return void
     */
    public function hydrater(array $data){

        foreach($data as $k => $v) {
            // Concaténer la clé pour rechercher le setter à appeler
            $setter = 'set'.ucfirst($k);
            if(method_exists($this,$setter)){
                // invoquer la méthode
                $this->$setter($v);
            }
        }
    }


    public function __construct($data = null){

        if($data != null){

            $this->hydrater($data);
        }

    }


    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }


    /**
     * @return mixed
     */
    public function getCodev()
    {
        return $this->codev;
    }


    /**
     * @param mixed $codev
     */
    public function setCodev($codev): void
    {
        $this->codev = $codev;
    }


    /**
     * @return mixed
     */
    public function getCodec()
    {
        return $this->codec;
    }
    /**
     * @param mixed $codec
     */
    public function setCodec($codec): void
    {
        $this->codec = $codec;
    }


    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * @param mixed $dateLivraison
     */
    public function setDateLivraison($dateLivraison): void
    {
        $this->dateLivraison = $dateLivraison;
    }


    /**
     * @return mixed
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * @param mixed $dateCommande
     */
    public function setDateCommande($dateCommande): void
    {
        $this->dateCommande = $dateCommande;
    }


    /**
     * @return mixed
     */
    public function getTotalHT()
    {
        return $this->totalHT;
    }

    /**
     * @param mixed $totalHT
     */
    public function setTotalHT($totalHT): void
    {
        $this->totalHT = $totalHT;
    }

    /**
     * @return mixed
     */
    public function getTotalTVA()
    {
        return $this->totalTVA;
    }

    /**
     * @param mixed $totalTVA
     */
    public function setTotalTVA($totalTVA): void
    {
        $this->totalTVA = $totalTVA;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat): void
    {
        $this->etat = $etat;
    }


    /**
     * @return mixed
     */
    public function getStat01()
    {
        return $this->stat01;
    }

    /**
     * @param mixed $stat01
     */
    public function setStat01($stat01): void
    {
        $this->stat01 = $stat01;
    }

    public function getAutorisationBD(): bool
    {
        return $this->autorisationBD;
    }

    public function setAutorisationBD(bool $autorisationBD): void
    {
        $this->autorisationBD = $autorisationBD;
    }

    public static function getMessageErreur(): string
    {
        return self::$messageErreur;
    }

    public static function setMessageErreur(string $messageErreur): void
    {
        self::$messageErreur = self::$messageErreur . $messageErreur . "<br>";
    }

    public static function getMessageSucces(): string
    {
        return self::$messageSucces;
    }

    public static function setMessageSucces(string $messageSucces): void
    {
        self::$messageSucces = self::$messageSucces . $messageSucces . "<br>";
    }


}
