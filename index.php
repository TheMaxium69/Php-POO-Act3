<?php

class Animal {

    public $nom;
    public $poids; // g

    public function __construct($n, $p){
        $this->nom = $n;
        $this->poids = $p;
    }

    public function manger(){
        return $this->nom . " est en train de manger ! ";
    }

}

class Chien extends Animal {

    public $race;

    public function __construct($n, $p, $r){
        parent::__construct($n, $p);
        $this->race = $r;
    }

    public function aboyer(){
        return "woauf je sui un ". $this->race;
    }

}


class Chat extends Animal {

    public $poilCouleur;

    public function __construct($n, $p, $pC){
        parent::__construct($n, $p);
        $this->poilCouleur = $pC;
    }

}

$monChien = new Chien("Rex", 30, "Labrador");

echo $monChien->manger(). "<br>";

echo $monChien->aboyer(). "<br>";


