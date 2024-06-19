<?php

class ClientTable
{
    private $codec;
    private $nom;
    private $prenom;
    private $adresse;
    private $cp;
    private $ville;
    private $telephone;
    private $motdepasse;
    private $email;

    private $autorisationBD = true;

    private static $messageErreur = "";
    private static $messageSucces = "";

    private $stat01;
    private $stat02;

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
    public function getCodec()
    {
        return $this->codec;
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
    public function getAdresse()
    {
        return $this->adresse;
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
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $codec
     */
    public function setCodec($codec): void
    {
        $this->codec = $codec;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        if (empty($nom) || ctype_space($nom)) {
            self::setMessageErreur("Le nom du client est obligatoire");
            $this->setAutorisationBD(false);
        }

        $this->nom = $nom;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp): void
    {
        if (empty($cp) || ctype_space($cp)) {
            self::setMessageErreur("Le code postal du client est obligatoire");
            $this->setAutorisationBD(false);
        }
        $this->cp = $cp;
    }

    /**
     * @param mixed $ville
     */
    public
    function setVille($ville): void
    {
        if (empty($ville) || ctype_space($ville)) {
            self::setMessageErreur("La ville du client est obligatoire");
            $this->setAutorisationBD(false);
        }
        $this->ville = $ville;
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
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @param mixed $motdepasse
     */
    public function setMotdepasse($motdepasse): void
    {
        $this->motdepasse = $motdepasse;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
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

    

}
