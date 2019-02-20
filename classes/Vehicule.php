<?php

abstract class Vehicule //implements Velocite
{
    public $masse;
    public $vitesse;

    /*public function Velocite ($a, $b)
    {
        return void;
    }*/

    public function calculerEnergieCinetique()
    {
       return 0.5 * $this->masse * ($this->vitesse ** 2);
    }
}