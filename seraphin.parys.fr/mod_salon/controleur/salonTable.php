<?php

class SalonTable{

    private $codes;
    private $nom;
    private $adresse;
    private $cp;
    private $ville;
    private $telephone;

    private $autorisationBD = true;
    private $datedebut;
    private $datefin;
    private $lien;

    /**
     * @return mixed
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * @param mixed $lien
     */
    public function setLien($lien): void
    {
        $this->lien = $lien;
    }

    private static $messageErreur = "";
    private static $messageSucces = "";
   private $stat01;

    /**
     * @param array $data
     * @return void
     */
    public function hydrater(array $data)
    {

        foreach ($data as $k => $v) {
            // Concaténer la clé pour rechercher le setter à appeler
            $setter = 'set' . ucfirst($k);
            if (method_exists($this, $setter)) {
                // invoquer la méthode
                $this->$setter($v);
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
        if (empty($nom) || ctype_space($nom)) {
            self::setMessageErreur("Le nom du salon est obligatoire.");
            $this->setAutorisationBD(false);
        }

        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
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

    /**
     * @param mixed $cp
     */
    public function setCp($cp): void
    {

        if (empty($cp) || ctype_space($cp)) {
            self::setMessageErreur("Le code postal du salon est obligatoire.");
            $this->setAutorisationBD(false);
        }

        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville): void
    {
        if (empty($ville) || ctype_space($ville)) {
            self::setMessageErreur("La ville du salon est obligatoire.");
            $this->setAutorisationBD(false);
        }

        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
    }




    /**
     * @return mixed
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * @param mixed $datedebut
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    }

    /**
     * @return mixed
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * @param mixed $datefin
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
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

    public static function setMessageSucces(string $messageSucces): void{
        self::$messageSucces = self::$messageSucces . $messageSucces . "<br>";
    }


}
