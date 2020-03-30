<?php

class Personnage {

     public $nom;
     public $force;
     public $level;
     public $hp;
     public $vie; 

    function carateristique() {
        echo $this->nom." a une force de ".$this->force." point au level ".$this->level." il a ".$this->hp." HP et il est ".$this->etat(); 
    }

    function etat() {
        if($this->hp >= 1) {
            $vie = "alive";
        } else {
            $vie = "dead";
        }

        return $vie;
    }

};

$perso1 = new Personnage();
$perso2 = new Personnage();
$perso3 = new Personnage();

$perso1->nom = "Pierre";
$perso1->force = 30;
$perso1->level = 1;
$perso1->hp = 100;
$perso1->vie;

$perso2->nom = "Paul";
$perso2->force = 10;
$perso2->level = 1;
$perso2->hp = 0;
$perso2->vie = "";

$perso3->nom = "Jack";
$perso3->force = 20;
$perso3->level = 1;
$perso3->hp = 100;
$perso3->vie = "";

$perso2->carateristique();
