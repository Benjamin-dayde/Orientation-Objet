<?php

class Personnage {

     private $nom;
     private $force;
     private $level;
     private $hp;
     private $vie;

    // Affiche les carateristique //

    function carateristique() {
        $etat = ($this->vie)? "mort" : "vivant";
        echo $this->nom." a une force de ".$this->force." point au level ".$this->level." il a ".$this->hp." HP et il est ".$etat; 
    }

    // Permet la modification des perso //

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

    function isVie(): bool {
        return $this->vie;
    }

    function setVie() {
        if($this->hp < 1) {
            $this->vie =  true;
        } else {
            $this->vie = false;
        }
    }

    function attaque()

};
// implementation des personnage et modification //
$perso1 = new Personnage();
$perso1->setNom("Bernard");
$perso1->setForce(12);
$perso1->setLevel(1);
$perso1->setHp(100);

$perso2 = new Personnage();
$perso2->setNom("miguel");
$perso2->setForce(12);
$perso2->setLevel(1);
$perso2->setHp(100);

$perso3 = new Personnage();
$perso3->setNom("Raph");
$perso3->setForce(12);
$perso3->setLevel(1);
$perso3->setHp(100);




echo $perso2->carateristique();


