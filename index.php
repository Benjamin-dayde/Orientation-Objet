<?php

class Personnage {

     private $nom;
     private $force;
     private $level;
     private $hp;
     private $vie;
    // construction des personage
    function __construct(string $nom, int $force = 20, int $level = 1, int $hp = 100,string $vie) {
        $this->nom = $nom;
        $this->force = $force;
        $this->level = $level;
        $this->hp = $hp;
        $this->vie = $vie;
    }
    // Affiche les carateristique //
    function carateristique() {
        echo $this->nom." a une force de ".$this->force." point au level ".$this->level." il a ".$this->hp." HP et il est ".$this->etat(); 
    }
    // défini si le personnage et mort ou vivant en fonction des HP //
    function etat() {
        if($this->hp >= 1) {
            $vie = "alive";
        } else {
            $vie = "dead";
        }

        return $vie;
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

    function getVie(): string {
        return $this->vie;
    }

    function setVie($vie) {
        $this->vie = $vie;
    }

    function attaquer() {
        echo $this->nom." attaque ". setNom($nom) . setNom($nom) ." perds ".$this->force;
    }

};
// implementation des personnage //
$perso1 = new Personnage( "",  30,  3,  100, "");
$perso2 = new Personnage( "",  50,  1,  0, "");
$perso3 = new Personnage( "",  30,  2,  50, "");

// modification des personnage //
$perso2->setNom("robert");
$perso2->setForce(50);
$perso2->setLevel(10);
$perso2->setHp(30);
$perso2->setVie("");

echo "le personnage ". $perso1->getNom() ." a ". $perso1->getForce() ." point de force et ". $perso1->getHp() ." point de vie en étant level". $perso1->getLevel() .". son état de santé indique qu'il est ". $perso1->getVie();

//echo $perso2->carateristique();


