<?php

class Archer {

     private $nom;
     private $force;
     private $level;
     private $hp;
     private $vie;
     private $type;

    // Affiche les carateristique //

    function carateristique() {
        $etat = ($this->vie)? "mort" : "vivant";
        echo $this->nom." a une force de ".$this->force." point au level ".$this->level." il a ".$this->hp." HP et il est ".$etat."sa classe est".$this->type; 
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

    function getType(): string {
        return $this->type;
    }
 
    // permet l'attaque entre personnage //

    function attaque($perso) {
        $perso->setHp($perso->getHp() - $this->force);
        $perso->setVie() ;
    }
    // permet la monté de level d'un personnage //
    function levelUp() {
        $this->level ++ ;
    }
 

};

class Guerrier {

    private $nom;
    private $force;
    private $level;
    private $hp;
    private $vie;
    private $type;

   // Affiche les carateristique //

   function carateristique() {
       $etat = ($this->vie)? "mort" : "vivant";
       echo $this->nom." a une force de ".$this->force." point au level ".$this->level." il a ".$this->hp." HP et il est ".$etat."sa classe est".$this->type; 
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

   function getType(): string {
       return $this->type;
   }


   // permet l'attaque entre personnage //

   function attaque($perso) {
       $perso->setHp($perso->getHp() - $this->force);
       $perso->setVie() ;
   }
   // permet la monté de level d'un personnage //
   function levelUp() {
       $this->level ++ ;
   }


};

class Mage {

    private $nom;
    private $force;
    private $level;
    private $hp;
    private $vie;
    private $type;

   // Affiche les carateristique //

   function carateristique() {
       $etat = ($this->vie)? "mort" : "vivant";
       echo $this->nom." a une force de ".$this->force." point au level ".$this->level." il a ".$this->hp." HP et il est ".$etat."sa classe est".$this->type; 
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

   function getType(): string {
       return $this->type;
   }

   // permet l'attaque entre personnage //

   function attaque($perso) {
       $perso->setHp($perso->getHp() - $this->force);
       $perso->setVie() ;
   }
   // permet la monté de level d'un personnage //
   function levelUp() {
       $this->level ++ ;
   }


};


// implementation des personnage et modification //

$perso1 = new Archer();
$perso1->setNom("Bernard");
$perso1->setForce(15);
$perso1->setLevel(1);
$perso1->setHp(75);


$perso2 = new Guerrier();
$perso2->setNom("miguel");
$perso2->setForce(30);
$perso2->setLevel(3);
$perso2->setHp(125);


$perso3 = new Mage();
$perso3->setNom("Raph");
$perso3->setForce(50);
$perso3->setLevel(2);
$perso3->setHp(0);




$perso1->attaque($perso3);
$perso1->levelUp();

var_dump($perso1);
var_dump($perso2);
var_dump($perso3);

$perso1->carateristique();

//var_dump($perso3);
//var_dump($perso1);


