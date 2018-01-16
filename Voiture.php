<?php
/**
 * Created by PhpStorm.
 * User: frede
 * Date: 15/01/2018
 * Time: 16:15
 */

class Voiture extends Vehicules
{
    public $roues = 4;
    public $marque;

    public function demarrer() {
        echo "Je demarre";
    }
}
