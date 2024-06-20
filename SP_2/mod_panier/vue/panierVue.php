<?php
class PanierVue{
    private $parametre = []; // $_REQUEST

    private $tpl; // Object

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

        $this->tpl = new Smarty();
    }



}