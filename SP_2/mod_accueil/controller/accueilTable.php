<?php
class AccueilTable
{
    private $stat01;
    private $stat02;
    private $stat03;
    private $stat04;









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
     * @return mixed
     */
    public function getStat04()
    {
        return $this->stat04;
    }















    /**
     * @param mixed stat01
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
     * @param mixed $stat04
     */
    public function setStat04($stat04): void
    {
        $this->stat04 = $stat04;
    }




}