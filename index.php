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

$perso2->setNom("robert");
$perso2->setForce(50);
$perso2->setLevel(10);
$perso2->setHp(30);
$perso2->setVie("");



echo $perso2->carateristique();


