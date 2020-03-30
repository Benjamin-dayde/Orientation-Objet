<?php

class Personnage {

     private $nom;
     private $force;
     private $level;
     private $hp;
     private $vie;
     
    function __construct(string $nom, int $force = 20, int $level = 1, int $hp = 100,string $vie) {
        $this->nom = $nom;
        $this->force = $force;
        $this->level = $level;
        $this->hp = $hp;
        $this->vie = $vie;
    }

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

    function getNom(): string {
        return $this->nom;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function getForce(): int {
        return $this->force;
    }

    function setForce($force) {
        $this->force = $force;
    }

    function getLevel(): int {
        return $this->level;
    }

    function setLevel($level) {
        $this->level = $level;
    }

    function getHp(): int {
        return $this->hp;
    }

    function setHp($hp) {
        $this->hp = $hp;
    }

    function getVie(): string {
        return $this->vie;
    }

    function setVie($vie) {
        $this->vie = $vie;
    }

};

$perso1 = new Personnage( "pierre",  30,  3,  100, "");
$perso2 = new Personnage( "paul",  50,  1,  0, "");
$perso3 = new Personnage( "jack",  30,  2,  50, "");

$perso2->setNom("miguel");
echo $perso2->getNom();

/*$perso1->nom = "Pierre";
$perso1->force = 30;
$perso1->level = 1;
$perso1->hp = 100;
$perso1->vie;

$perso2->nom = "Paul";
$perso2->force = 10;
$perso2->level = 1;
$perso2->hp = 0;
$perso2->vie;

$perso3->nom = "Jack";
$perso3->force = 20;
$perso3->level = 1;
$perso3->hp = 100;
$perso3->vie;*/

$perso1->carateristique();
