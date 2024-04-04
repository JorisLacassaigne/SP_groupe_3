<?php

/**
 *
 *
 */
class ServiceTable{

    private $codes;
    private $nom;
    private $description;
    private $etat;


    private $autorisationBD = true;

    private static $messageErreur = "";
    private static $messageSucces = "";

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
    public function getCodes()
    {
        return $this->codes;
    }

    /**
     * @param mixed $codes
     */
    public function setCodes($codes): void
    {
        $this->codes = $codes;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        if(empty($nom) || ctype_space($nom)){
            self::setMessageErreur("Le nom du service est obligatoire.");
            $this->setAutorisationBD(false);
        }

        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
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
