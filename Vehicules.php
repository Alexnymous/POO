<?php
/**
 * Created by PhpStorm.
 * User: frede
 * Date: 15/01/2018
 * Time: 17:16
 */

class Vehicules
{
    public $couleur;
    public $masse;

    public function afficherCouleur() {
        echo $this->couleur;
    }

    public function calculerEnergieCinetique($v) {
        return 0.5 * $this->masse * ($v ** 2);
    }
}
