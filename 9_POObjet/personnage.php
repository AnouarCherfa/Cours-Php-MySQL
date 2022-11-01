<?php

use Personnage as GlobalPersonnage;

class Personnage {

    // Attributs
    private $_force = 40;
    private $_classe = "Plombier";
    private $_couleurCasquette = "Rouge";
    private $_vie = 100;


    // Constructeur
    public function __construct($force, $couleur) {
         $this->setForce($force);
         $this->setcouleurCasquette($couleur);
    }

    // Methodes
    public function getForce() {
        return $this->_force;
    }

    public function setForce($force) {
        $this->_force = $force;

    }

    public function getCouleurCasquette() {
        return $this->_couleurCasquette;
    }

    public function setCouleurCasquette($couleur) {
        $this->_couleurCasquette = $couleur;
    }

    public function getClasse() {
        return $this->_classe;
    }

    public function setClasse($metier) {
        $this->_classe = $metier;
    }

    public function getinfo() {
        return "<p>Ce personnage a une force de ".$this->_force." est de classe ".$this->_classe." et a une casquette de couleur ".$this->_couleurCasquette.".</p>";
    }

}

$mario = new Personnage(45, "rouge");
$luigi = new Personnage(40, "verte");
echo $mario->getinfo();
echo $luigi->getinfo();
