<?php

class CommandeTable{

    private $numero;
    private $codev;
    private $codec;
    private $date_livraison;
    private $date_commande;
    private $total_ht;
    private $total_tva;
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
    public function getDateLivraison()
    {
        return $this->date_livraison;
    }


    /**
     * @param mixed $date_livraison
     */
    public function setDateLivraison($date_livraison): void
    {
        $this->date_livraison = $date_livraison;
    }


    /**
     * @return mixed
     */
    public function getDateCommande()
    {
        return $this->date_commande;
    }

    /**
     * @param mixed $date_commande
     */
    public function setDateCommande($date_commande): void
    {
        $this->date_commande = $date_commande;
    }


    /**
     * @return mixed
     */
    public function getTotalHt()
    {
        return $this->total_ht;
    }

    /**
     * @param mixed $total_ht
     */
    public function setTotalHt($total_ht): void
    {
        $this->total_ht = $total_ht;
    }

    /**
     * @return mixed
     */
    public function getTotalTva()
    {
        return $this->total_tva;
    }

    /**
     * @param mixed $total_tva
     */
    public function setTotalTva($total_tva): void
    {
        $this->total_tva = $total_tva;
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
